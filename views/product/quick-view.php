<div class="modal-dialog modal__container" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body row">
            <div class="modal-product col-md-12">
                <!-- Start product images -->
                <div class="product-images col-md-6">
                    <div class="main-image images" id="large">
                        <?php use yii\helpers\Html;
                        $image = $product->getImage(); ?>
                        <?=  Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                    </div>
                    <?php $gallery = $product->getImages();
                    if (count($gallery) > 1):?>
                        <div class="col-md-10">
                        <?php foreach ($gallery as $image):?>
                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-6">
                                <div class="pro__thumb" id="thumbnail" >
                                    <a href="#">
                                        <?=  Html::img($image->getUrl(), ['alt' => $product->name, 'title' => $product->name]) ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    <?php endif;?>
                </div>
                <!-- end product images -->
                <div class="product-info col-md-6">
                    <h1><?= $product->name?></h1>
                    <div class="price-box-3">
                        <div class="s-price-box">
                            <span class="new-price"><?= $product->price/100?> ₽</span>
                        </div>
                    </div>
                    <div class="quick-desc">
                        <?= $product->content?>
                    </div>
                    <div class="social-sharing">
                        <div class="widget widget_socialsharing_widget">
                            <h3 class="widget-title-modal">Поделиться этим товаром</h3>
                            <ul class="social-icons">
                                <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="addtocart-btn">
                        <a class="cart-add"  href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"
                           data-id="<?= $product->id?>">Добавить в корзину</a>
                    </div>
                </div><!-- .product-info -->
            </div><!-- .modal-product -->
        </div><!-- .modal-body -->
    </div><!-- .modal-content -->
</div>
