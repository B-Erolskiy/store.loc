<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offices */

$this->title = 'Изменение магазина: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Магазины', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="offices-update">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
