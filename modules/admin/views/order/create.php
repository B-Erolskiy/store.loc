<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Создание заказа';
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
