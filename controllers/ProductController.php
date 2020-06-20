<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id){
        //$id = Yii::$app->request->get('id');
        $product = Product::find()->where(['alias' => $id])->one();
        if (empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара не существует');

        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $this->setMeta('TMART | '. $product->name, $product->keywords_tag, $product->description_tag);
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        return $this->render('view', compact('product', 'hits'));
    }
}