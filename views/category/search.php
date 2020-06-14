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
                        <h2 class="bradcaump-title">Shop Sidebar</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="<?=\yii\helpers\Url::home(); ?>">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Поиск по запросу: <?= Html::encode($q)?></span>
                        </nav>
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
                    <!-- Start Range -->
                    <div class="htc-grid-range">
                        <h4 class="section-title-4">FILTER BY PRICE</h4>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                                <form action="#" method="GET">
                                    <div id="slider-range"></div>
                                    <div class="slider__range--output">
                                        <div class="price__output--wrap">
                                            <div class="price--output">
                                                <span>Price :</span><input type="text" id="amount" readonly>
                                            </div>
                                            <div class="price--filter">
                                                <a href="#">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Range -->
                    <!-- Start Product Cat -->
                    <div class="htc__shop__cat">
                        <h4 class="section-title-4"> Категории</h4>
                        <div class="category-menu-list">
                            <ul class="catalog">
                                <?= MenuWidget::widget(['tpl' => 'menu'])?>
                            </ul>
                        </div>
                    </div>


                    <!-- End Product Cat -->
                    <!-- Start Color Cat -->
                    <div class="htc__shop__cat">
                        <h4 class="section-title-4">CHOOSE COLOUR</h4>
                        <ul class="sidebar__list">
                            <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black<span>3</span></a></li>
                            <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue <span>4</span></a></li>
                            <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown <span>3</span></a></li>
                            <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red <span>6</span></a></li>
                            <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange <span>10</span></a></li>
                        </ul>
                    </div>
                    <!-- End Color Cat -->
                    <!-- Start Size Cat -->
                    <div class="htc__shop__cat">
                        <h4 class="section-title-4">PRODUCT CATEGORIES</h4>
                        <ul class="sidebar__list">
                            <li><a href="#">xl <span>3</span></a></li>
                            <li><a href="#">l <span>4</span></a></li>
                            <li><a href="#">lm <span>3</span></a></li>
                            <li><a href="#">ml <span>6</span></a></li>
                            <li><a href="#">m <span>10</span></a></li>
                            <li><a href="#">ml <span>3</span></a></li>
                        </ul>
                    </div>
                    <!-- End Size Cat -->
                    <!-- Start Tag Area -->
                    <div class="htc__shop__cat">
                        <h4 class="section-title-4">Tags</h4>
                        <ul class="htc__tags">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Stationery</a></li>
                            <li><a href="#">Homelife</a></li>
                            <li><a href="#">Appliances</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Baby</a></li>
                            <li><a href="#">Beauty</a></li>
                        </ul>
                    </div>
                    <!-- End Tag Area -->
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
                                        <option>Sort by newness</option>
                                        <option>Match</option>
                                        <option>Updated</option>
                                        <option>Title</option>
                                        <option>Category</option>
                                        <option>Rating</option>
                                    </select>
                                </div>
                                <div class="shp__pro__show">
                                    <span>Showing 1 - 4 of 25 results</span>
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
                                                        <?php $image=$product->getImage();
                                                        echo Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                                                    </a>                                                    </a>
                                                </div>
                                                <div class="product__hover__info">
                                                    <ul class="product__action">
                                                        <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
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
                                <h2>Ничего не найдено...</h2>
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
                                                    <?php $image=$product->getImage();
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
                                                    <a class="htc__btn cart-add" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"  data-id="<?= $product->id?>">Добавить в корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <h2>Ничего не найдено...</h2>
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