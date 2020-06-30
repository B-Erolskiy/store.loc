<?php
use yii\helpers\Html;
?>
<div class="single__list__content clearfix">
    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
        <div class="list__thumb">
            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $model->alias]); ?>">
                <?php $image = $model->getImage();
                echo Html::img($image->getUrl(), ['alt' => $model->name, 'title' => $model->name]) ?>
            </a>
        </div>
    </div>
    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
        <div class="list__details__inner">
            <h2><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $model->alias]); ?>"><?= $model->name?></a></h2>
            <p><?= $model->content?></p>
            <span class="product__price"><?= $model->price/100 ?> ₽</span>
            <div class="shop__btn">
                <a class="cart-add htc__btn" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $model->id])?>"  data-id="<?= $model->id?>">Добавить в корзину</a>
            </div>
        </div>
    </div>
</div>