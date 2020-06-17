<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\Request;


class CategoryController extends AppController
{
    public $ids = array();  //массив дочерних категорий
    public $parents = array();  //массив родительских категорий
    public $categories;


    public function actionIndex(){
        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $news = Product::find()->where(['new' => 1])->limit(6)->all();
        $this->setMeta('TMART | Каталог');

        $products = Product::find()->all();

        return $this->render('index', compact('products','hits', 'news'));
    }

    public function actionView($id){
        //$id = Yii::$app->request->get('id');

        //получение данных
        $category = Category::find()->where(['alias' => $id])->one();
        $this->categories = Category::find()->indexBy('id')->asArray()->all();

        $this->findIdChilds($category['id']);
        $this->getParents($category['id']);
        $parents = array_reverse($this->parents);

        if (empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории не существует');

        $products = Product::find()->where(['category_id' => $this->ids])->all();

        $this->setMeta('TMART | '. $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'category', 'parents'));
    }

    public  function actionSearch()
    {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('TMART | '. $q);
        if(!$q)
            return $this->render('search');
        $products = Product::find()->where(['like', 'name', $q])->all();
        return$this->render('search', compact('products', 'q'));
    }
    protected function findIdChilds($idCat){
        $this->ids[] = "$idCat";
        $this->findIdChild($idCat);
    }

    protected function findIdChild($id){
        foreach ($this->categories as $category){
            if ($id == $category['parent']){
                $this->ids[] = $category['id'];
                $idsFind[]= $category['id'];
            }
        }
        for ($j=0;$j<count($idsFind);$j++){
            $this->findIdChild($idsFind[$j]);
        }
    }

    protected function getParents($categoryId){
            foreach ($this->categories as $category){
                if ($this->categories[$categoryId]['parent'] == 0) break;
                if($category['id'] == $this->categories[$categoryId]['parent']){
                    $this->parents[] = $category;
                    $categoryId = $category['id'];
                    $this->getParents($categoryId);
                }
            }
    }
}