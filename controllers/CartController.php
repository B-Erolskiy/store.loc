<?php


namespace app\controllers;
use app\models\Order;
use app\models\OrderItems;
use app\models\Product;
use app\models\Cart;
use Yii;
use yii\web\Request;


class CartController extends AppController
{
    public function actionAdd() {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Product::findOne($id);
        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if (!Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }
        //return $this->render('view', compact('session'));
    }

    public function actionDelete($id, $isAjax = false) {
        $product = Product::findOne($id);
        $fromDelete = true;
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->deleteFromCart($product);

        $this->setMeta('Корзина');

        $order = new Order();
        if ($this->orderLoad($order, $session, $fromDelete))
        {
            Yii::$app->session->setFlash('success','Ваш заказ оформлен, мы свяжемся с вами в ближайшее время');
            return $this->render('view', compact('order','session'));        }
        if($isAjax){
            $this->layout = false;
            return $this->render('ajax-cart', compact('order','session'));
        }
        else{
            return $this->render('view', compact('order','session'));
        }
    }

    public function beforeAction($action)
    {
        if($action->id == 'view')
            $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionView() {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        $this->setMeta('TMART | Корзина');
        if ($this->orderLoad($order, $session))
        {
            Yii::$app->session->setFlash('success','Ваш заказ оформлен, мы свяжемся с вами в ближайшее время');
            return $this->render('view', compact('order','session'));
        }

        return $this->render('view', compact('order','session'));
    }

    public function actionClear() {
        $this->cartClear();
        $this->layout = false;
        return $this->render('ajax-cart', compact('order','session'));
    }

    protected function saveOrderItems($items, $order_id){
        foreach ($items as $id => $item){
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty']*$item['price'];
            $order_items->save();
        }
    }

    protected function cartClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
    }

    protected function orderLoad($order, $session, $fromDelete = false){
        if ($order->load(Yii::$app->request->post())){

            $order->created_at = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i:s');
            $order->sum = (int)$session['cart.sum'];
            $order->qty = (int)$session['cart.qty'];

            if ($order->save())
            {
                $this->saveOrderItems($session['cart'], $order->id);
                $message = Yii::$app->mailer->compose('order',
                    ['session' => $session,
                        'order' => $order,
                    ])
                    ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                    ->setTo($order->email)
                    ->setSubject('Заказ с сайта store.loc - ' . $order->id)
                    ->send();


                $this->cartClear();
                return true;
                /*if($fromDelete)
                    $this->actionView();
                else
                    return true;
                    return $this->refresh();*/
            }
            else{
                return false;
                //Yii::$app->session->setFlash('error','Ошибка в оформлении заказа, обратитесь к администратору');
            }
        }
    }
}