<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ №" . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Панель администратора', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <?=  Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]);?>
    <h1>Просмотр заказа №<?= $model->id ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данный заказ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'created_at',
            'updated_at',
            'qty',
            'sum',
            [
                'attribute' => 'status',
                'value' =>  !$model->status ?
                '<span class="text-danger">Активен</span>' :
                '<span class="text-success">Завершен</span>'
                ,
                'format' => 'html',
            ],
            //'status',
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>
    <?php $items = $model->orderItems;?>
    <div class="table-content table-responsive cart-table">
            <table>
                <thead>
                <tr>
                    <th class="product-name">Товар</th>
                    <th class="product-price">Цена</th>
                    <th class="product-quantity">Количество</th>
                    <th class="product-subtotal">Итого</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item):?>
                        <tr>
                            <td class="product-name"><a href="<?=\yii\helpers\Url::to(['/product/view', 'id' => $item['product_id']]); ?>""><?=$item['name']?></a></td>
                            <td class="product-price"><span class="amount"><?=$item['price']/100?></span></td>
                            <td class="product-price"><span class="amount"><?=$item['qty_item']?></span></td>
                            <td class="product-subtotal"><?=$item['sum_item']?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>
