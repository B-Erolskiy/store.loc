<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Магазины';
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-index">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать магазин', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'addess',
            'worktime',
            'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
