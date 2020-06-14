<?php

use app\components\MenuWidget;
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('../../web/images/bg/2.jpg') no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Информация о товаре</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="<?=\yii\helpers\Url::home(); ?>">Главная</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active"><a href="<?=\yii\helpers\Url::to(['category/view', 'id' => $product->category->alias]) ?>"><?= $product->category->name?></a></span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Product Details -->
<section class="htc__product__details pt--100 pb--100 bg__white">
    <div class="container">
        <div class="scroll-active">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-5 col-xs-12">
                    <div class="product__details__container product-details-5">
                        <div class="col-md-12">
                            <div id="large">
                                <?php $image = $product->getImage();?>
                                <?=  Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                            </div>
                        </div>
                        <div class="product-slider-active owl-carousel col-md-10">
                            <?php $gallery = $product->getImages();
                            foreach ($gallery as $image):?>
                                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-6">
                                    <div class="pro__thumb" id="thumbnail" >
                                        <a href="#">
                                            <?=  Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="sidebar-active col-md-5 col-lg-5 col-sm-7 col-xs-12 xmt-30">
                    <div class="htc__product__details__inner ">
                        <div class="pro__detl__title">
                            <h2><?= $product->name?></h2>
                        </div>
                        <div class="pro__dtl__rating">
                            <ul class="pro__rating">
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                            </ul>
                            <span class="rat__qun">(0 Отзывов)</span>
                        </div>
                        <div class="pro__details">
                            <p><?= $product->content?></p>
                        </div>
                        <ul class="pro__dtl__prize">
                            <li><?= $product->price/100?>  ₽</li>
                        </ul>
                        <div class="product-action-wrap">
                            <div class="prodict-statas"><span>Количество :</span></div>
                            <div class="product-quantity">
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" id="qtybutton" min="1" value="1">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <ul class="pro__dtl__btn">
                            <li class="buy__now__btn"><a class="ti-shopping-cart"  href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>">купить</a></li>
                            <li><a href="#"><span class="ti-heart"></span></a></li>
                            <li><a href="#"><span class="ti-email"></span></a></li>
                        </ul>
                        <div class="pro__social__share">
                            <h2>Поделиться :</h2>
                            <ul class="pro__soaial__link">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Details -->
<!-- Start Product tab -->
<section class="htc__product__details__tab bg__white pb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <ul class="product__deatils__tab mb--60" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#description" role="tab" data-toggle="tab">Описание</a>
                    </li>
                    <li role="presentation">
                        <a href="#sheet" role="tab" data-toggle="tab">Дополнительно</a>
                    </li>
                    <li role="presentation">
                        <a href="#reviews" role="tab" data-toggle="tab">Отзывы</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row table-responsive">
            <div class="col-md-12">
                <div class="product__details__tab__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="product__tab__content fade in active">
                        <div class="product__description__wrap">
                            <div class="product__desc">
                                <h2 class="title__6">Описание</h2>
                                <p><?= $product->description?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="sheet" class="product__tab__content fade">
                        <div class="pro__feature">
                            <h2 class="title__6">Ссылки</h2>
                            <ul class="feature__list">
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="reviews" class="product__tab__content fade">
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        <?php if (!empty($hits)):  ?>
            <div class="tab-pane active" id="home1">
                <div class="row">
                    <h2 class="hits-title">ПОПУЛЯРНЫЕ ТОВАРЫ</h2>

                    <div class="product-slider-active owl-carousel">
                        <?php foreach ($hits as $hit):?>
                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                <div class="product">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $hit->id]); ?>">
                                                <?php $image=$hit->getImage();
                                                echo Html::img($image->getUrl(), ['alt' => $hit->name, 'title' => $hit->name]) ?>
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a class="ti-shopping-cart" title="Добавить в корзину" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?= $hit->id?>"></a></li>
                                                <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $hit->id]); ?>"><?= $hit->name?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $hit->price/100 ?> ₽</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Product tab -->