<?php

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('../../web/images/bg/2.jpg') no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Каталог товаров</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Our ShopSide Area -->
<section class="htc__shop__sidebar bg__white ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="htc__shop__left__sidebar">
                    <!-- Start Product Cat -->
                    <div class="htc__shop__cat">
                        <h4 class="section-title-4"> Категории</h4>
                        <div class="category-menu-list">
                            <ul>
                                <?= MenuWidget::widget(['tpl' => 'menu'])?>
                            </ul>
                        </div>
                        <div class="category-menu-list">
                            <ul class="catalog">
                                <?= MenuWidget::widget(['tpl' => 'menu-index'])?>
                            </ul>
                        </div>
                    </div>
                    <div class="htc-grid-range">
                        <h4 class="section-title-4">Фильтрация по цене</h4>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                                <form action="#" method="GET">
                                    <div id="slider-range"></div>
                                    <div class="slider__range--output">
                                        <div class="price__output--wrap">
                                            <div class="price--output">
                                                <span>Цена :</span><input type="text" id="amount" readonly>
                                            </div>
                                            <div class="price--filter">
                                                <a href="#" class="ti-search"></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Cat -->
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-30">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="producy__view__container">
                            <!-- Start Short Form -->
                            <div class="product__list__option">
                                <div class="order-single-btn">
                                    <select class="select-color selectpicker">
                                        <option>Сортировка по умолчанию</option>
                                        <option>По названию</option>
                                        <option>По категории</option>
                                        <option>По дате создания</option>
                                    </select>
                                </div>
                                <div class="shp__pro__show">
                                    <span>Показано <?= count($products);?> товаров</span>
                                </div>
                            </div>
                            <!-- End Short Form -->
                            <!-- Start List And Grid View -->
                            <ul class="view__mode" role="tablist">
                                <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                            </ul>
                            <!-- End List And Grid View -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="shop__grid__view__wrap another-product-style">
                        <!-- Start Single View -->
                        <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                            <?php if (!empty($products)):  ?>
                                <!-- Start Single Product -->
                                <?php $i = 0; foreach ($products as $product): ?>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                        <div class="product">
                                            <div class="product__inner">
                                                <div class="pro__thumb">
                                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $product->alias]); ?>">
                                                        <?php $image = $product->getImage();
                                                        echo Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                                                    </a>
                                                </div>
                                                <div class="product__hover__info">
                                                    <ul class="product__action">
                                                        <li><a data-toggle="modal" data-target="#productModal" title="Быстрый просмотр" data-id="<?= $product->id?>" class="product-quick-view quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                        <li><a class="ti-shopping-cart cart-add" title="Добавить в корзину" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>"></a></li>
                                                        <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__details">
                                                <h2><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $product->alias]); ?>"><?= $product->name?></a></h2>
                                                <ul class="product__price">
                                                    <li class="new__price"><?= $product->price/100 ?> ₽</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                    <?php $i++; ?>
                                    <?php if ($i % 3 === 0) :?>
                                        <div class="clearfix"></div>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <h2 >Здесь товаров пока нет...</h2>
                            <?php endif;?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Single View -->
                        <!-- Start Single View -->
                        <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                            <!-- Start List Content-->
                            <?php if (!empty($products)):  ?>
                                <?php foreach ($products as $product): ?>
                                    <div class="single__list__content clearfix">
                                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                            <div class="list__thumb">
                                                <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $product->alias]); ?>">
                                                    <?php $image = $product->getImage();
                                                    echo Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                                            <div class="list__details__inner">
                                                <h2><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $product->alias]); ?>"><?= $product->name?></a></h2>
                                                <p><?= $product->content?></p>
                                                <span class="product__price"><?= $product->price/100 ?> ₽</span>
                                                <div class="shop__btn">
                                                    <a class="cart-add htc__btn" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"  data-id="<?= $product->id?>">Добавить в корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <h2 >Здесь товаров пока нет...</h2>
                            <?php endif;?>
                            <!-- End List Content-->
                        </div>
                        <!-- End Single View -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our ShopSide Area -->