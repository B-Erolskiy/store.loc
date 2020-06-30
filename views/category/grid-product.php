<?php

use yii\helpers\Html;
//debug($model);
?>
<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
    <div class="product">
        <div class="product__inner">
            <div class="pro__thumb">
                <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $model->alias]); ?>">
                    <?php $image = $model->getImage();
                    echo Html::img($image->getUrl(), ['alt' => $model->name, 'title' => $model->name])?>
                </a>
            </div>
            <div class="product__hover__info">
                <ul class="product__action">
                    <li><a data-toggle="modal" data-target="#productModal" title="Быстрый просмотр" data-id="<?= $model->id?>" class="product-quick-view quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                    <li><a class="ti-shopping-cart cart-add" title="Добавить в корзину" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $model->id])?>" data-id="<?= $model->id?>"></a></li>
                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="product__details">
            <h2><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $model->alias]); ?>"><?= $model->name?></a></h2>
            <ul class="product__price">
                <li class="new__price"><?= $model->price/100 ?> ₽</li>
            </ul>
        </div>
    </div>
</div>
<?php if(++$index % 3 == 0):?>
    <div class="clearfix"></div>
<?php endif;
?>
