<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\Request;


class CategoryController extends AppController
{
    public function actionIndex(){
        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $news = Product::find()->where(['new' => 1])->limit(6)->all();
        $this->setMeta('Erolsky Store');
        //debug($hits);
        return $this->render('index', compact('hits', 'news'));
    }

    public function actionView($id){
        //$id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        if (empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории не существует');
        $products = Product::find()->where(['category_id' => $id])->all();

        $this->setMeta('Erolsky Store | '. $category->name, $category->keywords, $category->description);

        return $this->render('view', compact('products', 'category'));
    }

    public  function actionSearch()
    {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Erolsky Store | '. $q);
        if(!$q)
            return $this->render('search');
        $products = Product::find()->where(['like', 'name', $q])->all();
        return$this->render('search', compact('products', 'q'));
    }
}