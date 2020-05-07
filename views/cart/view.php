<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<div class="wrapper fixed__footer">

    <div class="body__overlay"></div>
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('../../web/images/bg/2.jpg') no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Корзина</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="<?=\yii\helpers\Url::home(); ?>">Главная</a>
                                <span class="brd-separator">/</span>
                                <span class="breadcrumb-item active">Корзина</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--60 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php if (Yii::$app->session->hasFlash('success')): //сообщение об успешной валидации ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo(Yii::$app->session->getFlash('success')); ?>
                        </div>
                    <?php endif;?>

                    <?php if (Yii::$app->session->hasFlash('error')): //сообщение об непройденной валидации ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo(Yii::$app->session->getFlash('error')); ?>
                        </div>
                    <?php endif;?>
                        <div class="table-content table-responsive cart-table">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Фото</th>
                                    <th class="product-name">Товар</th>
                                    <th class="product-price">Цена</th>
                                    <th class="product-quantity">Количество</th>
                                    <th class="product-subtotal">Итого</th>
                                    <th class="product-remove">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($session['cart'])): ?>
                                    <?php foreach ($session['cart'] as $id => $item):?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $item['id']]); ?>">
                                                    <?= Html::img('@web/images/product/big-img/' . $item['img'], ['alt' => $item['name'], 'title' => $item['name']]) ?>
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#"><?=$item['name']?></a></td>
                                            <td class="product-price"><span class="amount"><?=$item['price']/100?></span></td>
                                            <td class="product-price"><span class="amount"><?=$item['qty']?></span></td>
                                            <td class="product-subtotal"><?=$item['price']/100*$item['qty']?></td>
                                            <td class="product-remove"><a href="<?= \yii\helpers\Url::to(['cart/delete','id'=> $item['id']])?>" data-id="<?=$item['id']?>" class="del-item">X</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                <tr>
                                    <td colspan="6">Корзина пуста</td>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <a class="ti-shopping-cart-clear" href="<?= \yii\helpers\Url::to(['cart/clear'])?>" style="cursor: pointer;" id="clearCart-button">Очистить корзину</a>
                                    <a href="<?=\yii\helpers\Url::home(); ?>">Продолжить покупки</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Итог</h2><br>
                                    <table>
                                        <tbody>
                                        <?php if(!empty($session['cart'])): ?>
                                        <tr class="cart-subtotal">
                                            <th>Итоговое количество</th>
                                            <td><span class="amount"><?=$session['cart.qty']?></span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Итого к оплате</th>
                                            <td>
                                                <strong><span class="amount"><?=$session['cart.sum']?></span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="#form">Оформить заказ</a>
                                    </div>
                                    <?php else : ?>
                                        <tr class="order-total">
                                            <th colspan="2">Товаров нет</th>
                                        </tr>
                                        </tbody>
                                        </table>
                                    <?php endif;?>

                                </div>
                            </div>
                        </div>
                    <?php if (!empty($session['cart'])) :?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="form">
                                <h2 class="bradcaump-title">Форма оформления заказа</h2>
                                <br>

                                <?php $form = ActiveForm::begin([
                                    'class' => 'form',
                                    'encodeErrorSummary' => false,
                                    'errorSummaryCssClass' => 'help-block',
                                ])?>
                                <?= $form->errorSummary($order)?>
                                <?= $form->field($order, 'name')?>
                                <?= $form->field($order, 'email')?>
                                <?= $form->field($order, 'phone')?>
                                <?= $form->field($order, 'address')?>
                                <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
                                <?php ActiveForm::end()?>

                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
</div>