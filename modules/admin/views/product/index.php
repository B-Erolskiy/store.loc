<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo(Yii::$app->session->getFlash('error')); ?>
        </div>
    <?php endif;?>

    <?php Pjax::begin();?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                    'attribute' => 'category_id',
                    'value' => function($data){
                    return $data->category->name;
                    }
            ],
            //'alias',
            //'content:ntext',
            [
                'attribute' => 'price',
                'value' => function($data){
                    return $data->price/100;
                }
            ],

            //'keywords_tag',
            //'description:ntext',
            //'img',
            //'hit',
            //'new',
            //'sale',
            //'description_tag:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>


</div>
