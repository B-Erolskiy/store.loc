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

    public function actionDelete($id) {
        $product = Product::findOne($id);
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->deleteFromCart($product);
        $this->layout = false;

        return $this->render('cart-main-area', compact('session'));
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
        $this->setMeta('Корзина');
        if ($order->load(Yii::$app->request->post())){
            $order->created_at = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i:s');
            if ($order->save())
            {
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error','Ошибка');
            }
        }
        return $this->render('view', compact('order','session'));
    }

    public function actionClear() {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-main-area', compact('session'));
    }
}