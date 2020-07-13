<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use \app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../../web/images/favicon.ico">
    <link rel="apple-touch-icon" href="../../web/apple-touch-icon.png">

</head>

<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="<?=\yii\helpers\Url::home(); ?>">
                                <?= Html::img('@web/images/logo/logo.png', ['alt' => 'Логотип']) ?>
                            </a>
                        </div>
                    </div>
                    <!-- Start MAinmenu Ares -->
                    <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                        <nav class="mainmenu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li><a href="<?=\yii\helpers\Url::home(); ?>">Главная</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['category/index'])?>">Каталог</a></li>
                                <li><a href="#">Акции</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/offices'])?>">Магазины</a></li>
                            </ul>
                        </nav>
                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="<?=\yii\helpers\Url::home(); ?>">Home</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['category/index'])?>">Каталог</a></li>
                                    <li><a href="<?=\yii\helpers\Url::to(['cart/view']); ?>">Корзина</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/offices'])?>">Магазины</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-sm-4 col-xs-3">
                        <ul class="menu-extra">
                            <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/admin'])?>"><span class="ti-user"></span></a></li>
                            <li>

                                <a href="<?=\yii\helpers\Url::to(['cart/view']); ?>">
                                    <span class="ti-shopping-cart"><?php $session = Yii::$app->session;
                                        if ($session['cart.qty']):?>
                                            <div class="c-amount-indicator mini-basket-amount sel-mini-cart-count"><?= $session['cart.qty']?></div>
                                        <?php endif;?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="<?= \yii\helpers\Url::to(['category/search'])?>" method="get">
                                <input placeholder="Введите здесь... " name="search_name" type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Feature Product -->

    <?= $content; ?>


</div>
<!-- Start Footer Area -->
<footer class="htc__foooter__area gray-bg">
    <div class="container">
        <div class="row">
            <div class="footer__container clearfix">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="ft__widget">
                        <div class="ft__logo">
                            <a href="<?= \yii\helpers\Url::home();?>">
                                <img src="../../web/images/logo/logo.png" alt="footer logo">
                            </a>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="address-text">
                                        <a href="https://yandex.ru/maps/?pt=30.346582,60.047281&z=14&l=map" target="_blank">Главный офис: СПб, улица Ивана Фомина, дом 777 офис 12</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="address-text">
                                        <a href="mailto:<?= Yii::$app->params['senderEmail']?>"> <?= Yii::$app->params['senderEmail']?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-icon">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                    </div>
                                    <div class="address-text">
                                        <a href="tel:<?= trim(Yii::$app->params['contactPhone'])?>"><?= Yii::$app->params['contactPhone']?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="social__icon">
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Категории</h2>
                        <ul class="footer-categories">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'footer-menu']) ?>
                        </ul>
                    </div>
                </div>
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Страницы</h2>
                        <ul class="footer-categories">
                            <li><a href="<?=\yii\helpers\Url::home(); ?>">Главная</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['category/index'])?>">Каталог</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['/offices'])?>">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                    <div class="ft__widget">
                        <h2 class="ft__title">Новостная рассылка</h2>
                        <div class="newsletter__form">
                            <p>Подпишитесь на нашу новостную рассылку и получите скидку 10% на ваш первый заказ</p>
                            <div class="input__box">
                                <div id="mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email адрес" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
        <!-- Start Copyright Area -->
        <div class="htc__copyright__area">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="copyright__inner">
                        <div class="copyright">
                            <p>© 2020 TMART
                                Все права защищены.</p>
                        </div>
                        <ul class="footer__menu">
                            <li><a href="<?=\yii\helpers\Url::home(); ?>">Главная</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['category/index'])?>">Каталог</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['/offices'])?>">Свяжитесь с нами</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </div>
</footer>
<!-- End Footer Area -->
<!-- Body main wrapper end -->
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="myProductModal" tabindex="-1" role="dialog">
        <!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<div class="modal modal-cart fade" data-target=".bd-example-modal-sm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Сообщение</h4>
            </div>
            <div class="modal-body">
                <p>Товар добавлен в корзину</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="continue-btn btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                <a href="<?=\yii\helpers\Url::to(['cart/view']); ?>"><button type="button" class="btn btn-primary gotocart-btn">Перейти к корзине</button></a>
            </div>
        </div><!-- /.модальное окно-Содержание -->
    </div><!-- /.модальное окно-диалог -->
</div><!-- /.модальное окно -->
<!-- END QUICKVIEW PRODUCT -->
<!-- Placed js at the end of the document so the pages load faster -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>