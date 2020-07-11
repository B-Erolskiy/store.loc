<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use app\models\ProductSearch;


class CategoryController extends AppController
{
    public $parents = array();  //массив родительских категорий
    public $ids = array();  //массив дочерних категорий
    public $categories;


    public function actionIndex(){
        //заголовок страницы
        $this->setMeta('TMART | Каталог');

        //модель для поиска и вывода товаров
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id){
        //получение текущей категории
        $category = Category::find()->where(['alias' => $id])->one();

        //вывод ошибки, если категория не нашлась
        if (empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории не существует');

        //получение всех категорий
        $this->categories = Category::find()->indexBy('id')->asArray()->all();

        //поиск дочерних и родительских категорий
        $this->findIdChilds($category['id']);
        $this->getParents($category['id']);

        //родительские категории для вывода breadcrumbs
        $parents = array_reverse($this->parents);

        //заголовок страницы
        $this->setMeta('TMART | '. $category->name, $category->keywords, $category->description);
        //модель для поиска и вывода товаров
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->ids);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category,
            'parents' => $parents,
        ]);
    }

    public  function actionSearch()
    {
        //получение строки поиска товаров
        $q = trim(Yii::$app->request->get('q'));
        if(!$q)
            return $this->render('search');

        //заголовок страницы
        $this->setMeta('TMART | '. $q);

        //получение товаров в соответствии с условием поиска
        $products = Product::find()->where(['like', 'name', $q])->all();

        return $this->render('search', compact('products', 'q'));
    }


    //рекурсивная функция заполнения массива родительских категорий
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

    //функция заполнения первого элемента массива дочерних категорий и запуска рекурсивной функции
    //входной параметр - id текущей категории
    protected function findIdChilds($idCat){
        $this->ids[] = "$idCat";

        $this->findIdChild($idCat);
    }

    //рекурсивная функция для заполнения массива дочерних категорий
    //входной параметр - id категории
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
}