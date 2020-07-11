<?php

namespace app\controllers;

use app\models\Offices;
use app\models\Product;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use yii\web\Request;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'foreColor' => 0xFF4136, // цвет символов
                'minLength' => 5, // минимальное количество символов
                'maxLength' => 6, // максимальное
                'offset' => 6,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->setMeta('TMART');

        $categories = $this->getTree(Category::find()->indexBy('id')->asArray()->all());
        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $news = Product::find()->where(['new' => 1])->limit(6)->all();
        $sales = Product::find()->where(['sale' => 1])->limit(6)->all();

        return $this->render('index', compact('categories','hits', 'news', 'sales'));
    }

    public function actionOffices($isFormSent = false)
    {
        //Yii::$app->session->destroy();
        $this->setMeta('TMART | Магазины');
        $offices = Offices::find()->all();
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())&& $model->validate()) {

                $model->contact(Yii::$app->params['adminEmail']);
                $session = Yii::$app->session;
                $session->open();
                return $this->redirect(['/offices', 'isFormSent' => true]);
        }
        return $this->render('contact', compact('offices','model', 'isFormSent'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    //функция для взятия дерева категорий
    public function getTree($data){
        $tree = [];
        foreach ($data as $id=>&$node) {
            if (!$node['parent'])
                $tree[$id] = &$node;
            else
                $data[$node['parent']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }
}
