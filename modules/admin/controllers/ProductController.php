<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Product;
use app\modules\admin\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if($model->image){

                $model->upload();
            }
            unset($model->image);
            $model->gallery = UploadedFile::getInstances($model,'gallery');
            $model->uploadGallery();
            Yii::$app->session->setFlash('success', 'Товар "'. $model->name . '" добавлен');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->image = UploadedFile::getInstance($model, 'image');
            if($model->image){
                $model->upload();
            }
            unset($model->image);
            $model->gallery = UploadedFile::getInstances($model,'gallery');
            $model->uploadGallery();
            Yii::$app->session->setFlash('success', 'Товар "'. $model->name . '" обновлен');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        Yii::$app->session->setFlash('error', 'Товар "'. $this->findModel($id)->name . '" удален');
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionDmimage($id, $isAjax = false){
        $model = $this->findModel($id);
        $image = $model->getImage();
        $model->removeImage($image);
        if ($isAjax){
            $this->layout = false;
            return $this->render('delete-images', compact('model'));
        }
        else{
            $this->layout = true;
            return $this->render('update', compact('model'));
        }
    }

    public function actionDgimage($id, $imageId,$isAjax = false){
        $model = $this->findModel($id);
        $images = $model->getImages();
        foreach ($images as $image) {
            if ($image->getPrimaryKey() == $imageId) {
                $model->removeImage($image);
            }
        }
        if ($isAjax){
            $isAjax = false;
            $this->layout = false;
            return $this->render('delete-images', compact('model'));
        }
        else{
            $this->layout = true;
            return $this->render('update', compact('model'));
        }
    }
    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
