<?php

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
?>
<?php Pjax::begin();?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('../../web/images/bg/2.jpg') no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ($search_name != null):?>
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Каталог товаров</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="<?=\yii\helpers\Url::to(['category/'])?>">Каталог</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Поиск по запросу: <?= Html::encode($search_name)?></span>
                            </nav>
                        </div>
                    <?php else:?>
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Каталог товаров</h2>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Our ShopSide Area -->
<section class="htc__shop__sidebar bg__white ptb--40">
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
                    <div class="product-search">

                        <h4 class="section-title-4">Фильтры</h4>

                        <?php $form = ActiveForm::begin([
                            'method' => 'get',
                            'action' => ['index'],
                            'options' => ['data-pjax' => true],
                            'id' => 'filter-products',
                        ]); ?>

                        <?= $form->field($searchModel, 'sortBy')->dropDownList([
                            'default' => 'Сортировка по умолчанию',
                            'date' => 'По дате добавления ↑',
                            'name-asc' => 'По названию ↑',
                            'name-desc' => 'По названию ↓',
                            'price-asc' => 'По цене ↑',
                            'price-desc' => 'По цене ↓',
                        ]);?>

                        <h4 class="section-title-4">Специальные предложения</h4>

                        <?= $form->field($searchModel, 'all')
                            ->checkbox([
                                'label' => 'Все',
                                'uncheck' => null
                            ]);?>

                        <?= $form->field($searchModel, 'new')
                            ->checkbox([
                                'label' => 'Новый товар',
                                'uncheck' => null
                            ]);?>

                        <?= $form->field($searchModel, 'hit')
                            ->checkbox([
                                'label' => 'Хит',
                                'uncheck' => null
                            ]);?>

                        <?= $form->field($searchModel, 'sale')
                            ->checkbox([
                                'label' => 'Распродажа',
                                'uncheck' => null
                            ]);?>

                        <h4 class="section-title-4">По цене</h4>

                        <div id="slider-range"></div>
                        <div class="slider__range--output">
                            <div class="price__output--wrap">
                                <div class="price--output">
                                    <span>Цена :</span><input type="text" id="amount" readonly>
                                </div>
                            </div>
                        </div>

                        <?= $form->field($searchModel, 'price_min', ['options' => ['class' => 'col-md-5']]) ?>

                        <?= $form->field($searchModel, 'price_max', ['options' => ['class' => 'col-md-5']]) ?>

                        <div id="all_prices_max" class="hidden"><?= $searchModel['all_prices_max'] ?></div>

                        <div class="form-group">
                            <?= Html::submitButton('Применить', ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Очистить',['index'], ['class' => 'btn btn-outline-secondary']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                    <!-- End Product Cat -->
                </div>
            </div>

            <div id="products-container"  class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-30">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="producy__view__container">
                            <!-- Start Short Form -->
                            <div class="product__list__option">
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
                    <!-- Start preloader -->
                    <div id="cube-loader" class="hidden">
                        <div class="caption">
                            <div class="cube-loader">
                                <div class="cube loader-1"></div>
                                <div class="cube loader-2"></div>
                                <div class="cube loader-4"></div>
                                <div class="cube loader-3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End preloader -->
                    <div class="shop__grid__view__wrap another-product-style">
                        <!-- Start Single View -->
                        <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                            <?php if (!empty($dataProvider)):  ?>
                                <?php
                                echo ListView::widget([
                                    'summary' => '<div class="summary">Показаны товары <b>{begin}-{end}</b> из <b>{totalCount}</b></div>',
                                    'layout' => "{summary}\n{pager}\n<div class='row'>{items}</div>\n{pager}",
                                    'dataProvider' => $dataProvider,
                                    'itemView' => 'grid-product.php',
                                    'pager' => [
                                        'firstPageLabel' => 'первая',
                                        'lastPageLabel' => 'последняя',
                                        'prevPageLabel' => '<span class="ti-arrow-circle-left"></span>',
                                        'nextPageLabel' => '<span class="ti-arrow-circle-right"></span>',
                                        'maxButtonCount' => 3,
                                    ],
                                ]);?>
                                <div class="clearfix"></div>
                            <?php else : ?>
                                <h2 >Здесь товаров пока нет...</h2>
                            <?php endif;?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Single View -->
                        <!-- Start Single View -->
                        <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                            <!-- Start List Content-->
                            <?php if (!empty($dataProvider)):  ?>
                                <?php
                                echo ListView::widget([
                                    'layout' => "{summary}\n{pager}\n{items}\n",
                                    'dataProvider' => $dataProvider,
                                    'itemView' => 'list-product.php',
                                    'pager' => [
                                        'firstPageLabel' => 'первая',
                                        'lastPageLabel' => 'последняя',
                                        'prevPageLabel' => '<span class="ti-arrow-circle-left"></span>',
                                        'nextPageLabel' => '<span class="ti-arrow-circle-right"></span>',
                                    ],
                                ]);?>
                                <div class="clearfix"></div>
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
<?php Pjax::end();?>