<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo(Yii::$app->session->getFlash('success')); ?>
        </div>
    <?php endif;?>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данный товар?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name,
            ],
            'alias',
            'content:ntext',
            [
                 'attribute' => 'price',
                 'value' => $model->price/100,
            ],
            'keywords_tag',
            'description_tag:ntext',
            [
                'attribute' => 'description',
                'value' =>  $model->description,
                'format' => 'html',
            ],
            'img',
            [
                'attribute' => 'hit',
                'value' =>  !$model->hit ?
                    '<span class="text-danger">Нет</span>' :
                    '<span class="text-success">Да</span>'
                ,
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' =>  !$model->new ?
                    '<span class="text-danger">Нет</span>' :
                    '<span class="text-success">Да</span>'
                ,
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' =>  !$model->sale ?
                    '<span class="text-danger">Нет</span>' :
                    '<span class="text-success">Да</span>'
                ,
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>
