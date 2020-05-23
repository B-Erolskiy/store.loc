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
                        <a href="<?= \yii\helpers\Url::home()?>">
                            <div class="choose__details">
                                <h4>Главная</h4>
                                <p>Переход на главную страницу сайта.</p>
                            </div>
                        </a>
                    </div>
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-package"></span>
                        </div>
                        <a href="<?= \yii\helpers\Url::to(['/admin/order'])?>">
                            <div class="choose__details">
                            <h4>Заказы</h4>
                            <p>Список всех заказов с сайта.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="single__chooose col-md-6">
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-layout-grid2"></span>
                        </div>
                        <a href="<?= \yii\helpers\Url::to(['/admin/order'])?>">
                            <div class="choose__details">
                                <h4>Категории</h4>
                                <p>Список всех категорий товаров сайта.</p>
                            </div>
                        </a>
                    </div>
                    <div class="choose__us">
                        <div class="choose__icon">
                            <span class="ti-tablet"></span>
                        </div>
                        <a href="<?= \yii\helpers\Url::to(['/admin/order'])?>">
                            <div class="choose__details">
                                <h4>Товары</h4>
                                <p>Список всех товаров сайта.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>