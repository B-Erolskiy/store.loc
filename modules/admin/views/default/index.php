<div class="admin-default-index container">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="htc__choose__wrap bg__cat--4">
            <h1 class="choose__title">Панель администратора</h1>
            <div class="choose__container">
                <div class="single__chooose col-md-6">
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-home"></span>
                        </div>
                            <div class="choose__details">
                                <a href="<?= \yii\helpers\Url::home()?>">
                                    <h4>Главная</h4>
                                </a>
                                <p>Переход на главную страницу сайта.</p>
                            </div>
                    </div>
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-package"></span>
                        </div>
                        <div class="choose__details">
                                <a href="<?= \yii\helpers\Url::to(['/admin/order'])?>">
                                    <h4>Заказы</h4>
                                </a>
                            <p>Список всех заказов с сайта.</p>
                        </div>
                    </div>
                </div>
                <div class="single__chooose col-md-6">
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-layout-grid2"></span>
                        </div>
                        <div class="choose__details">
                            <a href="<?= \yii\helpers\Url::to(['/admin/categories'])?>">
                                <h4>Категории</h4>
                            </a>
                            <p>Список всех категорий товаров с сайта.</p>
                        </div>
                    </div>
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-tablet"></span>
                        </div>
                        <div class="choose__details">
                            <a href="<?= \yii\helpers\Url::to(['/admin/product'])?>">
                                <h4>Товары</h4>
                            </a>
                            <p>Список всех товаров сайта.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>