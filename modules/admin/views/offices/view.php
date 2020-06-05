<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offices */

$this->title = $model->addess;
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Магазины', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="offices-view">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'addess',
            'coord1',
            'coord2',
            'worktime',
            'phone',
        ],
    ]) ?>

</div>
