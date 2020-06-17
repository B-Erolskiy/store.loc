<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$res = Yii::$app->session->getFlash('contactFormSubmitted');

$this->title = 'Магазины компании';

foreach ($offices as $office){
    $codeJS .= "var menuItem = " . "\$(" . "'<li class=\"nav-item\"><a id=$office->id class=\"nav-link active\" href=\"#\"> " . "$office->addess" . "</a></li>'),\n" .
    "placemark$office->id = new ymaps.Placemark([$office->coord1, $office->coord2], 
    { balloonContentHeader: \"$office->addess\", balloonContentBody: \"$office->worktime<br><a href='tel:$office->phone' class='btn btn-danger center-block'>Позвонить</a>\",balloonContentFooter: 'Информация предоставлена:<br/>OOO \"TMART\"', options:{maxWidth: '350px'}},
    {iconLayout: 'default#image',iconImageHref: 'images/map/map-marker-icon.png',iconImageSize: [30, 43],iconImageOffset: [-5, -38]});\n" .
    "menuItem.appendTo('#menu-item')\n" .
    ".find('a#$office->id')
            .bind('click', function () {
                if (!placemark$office->id.balloon.isOpen()) {
                    placemark$office->id.balloon.open();
                } else {
                    placemark$office->id.balloon.close();
                }
                return false;
            });".
    "\$Maps['yandex_map'].geoObjects.add(placemark$office->id); myGeoObjects.push(placemark$office->id);";
}

$officesCount = count($offices);

$map = new \mirocow\yandexmaps\Map('yandex_map', [
    'center' => [60, 30.448927],
    'zoom' => 9,
    'behaviors' => array('default', 'scrollZoom'),
    'type' => "yandex#map",
    'controls' => []
],
    [
        'controls' => [
            // v 2.1
            'new ymaps.control.ZoomControl()',
            'new ymaps.control.TrafficControl()',
            'new ymaps.control.GeolocationControl()',
            'search' => 'new ymaps.control.SearchControl({options: {provider: "yandex#search"}})',
            'new ymaps.control.FullscreenControl()',
            'new ymaps.control.RulerControl()',
            //'new ymaps.control.RouteEditor({options: {size: "small"}})',
        ],
        'minZoom' => 1,
        'maxZoom' => 18,
        'objects' => [
        <<<JS
        //var collectionPlacemarks = new ymaps.GeoObjectCollection(null,{}); 
        myGeoObjects = [];
        
        $codeJS;
        
        \$Maps['yandex_map'].setBounds(\$Maps['yandex_map'].geoObjects.getBounds());
        
         /* Контейнер для меню.
         var clusterer = new \$Maps['yandex_map'].Clusterer({
                     preset: 'islands#invertedVioletClusterIcons',
                    groupByCoordinates: false,
                    clusterDisableClickZoom: true,
                    clusterHideIconOnBalloonOpen: false,
                    geoObjectHideIconOnBalloonOpen: false
         });
         clusterer.options.set({
        gridSize: 80,
        clusterDisableClickZoom: true
    });
        clusterer.add(collectionPlacemarks);*/
        
       //  \$Maps['yandex_map'].geoObjects.add(clusterer);
        \$Maps['yandex_map'].geoObjects.options.set('balloonMaxWidth', 200);
        search.events.add("resultselect", function (result){
            // Remove old coordinates
            /*\$Maps['yandex_map'].geoObjects.each(function(obj){
                \$Maps['yandex_map'].geoObjects.remove(obj);
            });*/  
            // Add selected coordinates
            var index = result.get('index');
            var searchControl = \$Maps['yandex_map'].controls.get(3);
            searchControl.getResult(index).then(function(res) {
                var coordinates = res.geometry.getCoordinates();
                $('#coordinates').html('');
                $('#coordinates').append('<input name="User[coordinates][]" value="'+coordinates[0]+'">');
                $('#coordinates').append('<input name="User[coordinates][]" value="'+coordinates[1]+'">');
            });
            
        });
        
        /*console.log(myGeoObjects);
        clusterer = new ymaps.Clusterer({
            preset: 'islands#invertedRedClusterIcons',
            groupByCoordinates: false,
            clusterDisableClickZoom: false,
        });
        clusterer.add(myGeoObjects);
        
        \$Maps['yandex_map'].geoObjects.add(clusterer);*/
JS
        ],
    ]
);
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('../../web/images/bg/2.jpg') no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title"><?= Html::encode($this->title) ?></h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="<?=\yii\helpers\Url::home(); ?>">Главная</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Магазины</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-contact container">
    <div class="ptb--30">
        <?php if ($isFormSent): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                Ваше обращение принято. Мы свяжемся с вами в ближайшее время
            </div>
        <?php endif;?>
        <h2>Поиск магазина</h2>
        <p><?php if($officesCount == 1) $officesCountStr = "магазин";
            elseif ($officesCount < 5) $officesCountStr = "магазина";
            else $officesCountStr = "магазинов";
            echo $officesCount . " " . $officesCountStr;?> по России</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12">
            <p>Чтобы найти магазин на карте, нажмите на него в меню ниже:</p>
            <ul class="nav flex-column"  id="menu-item" role="navigation"></ul>
        </div>
        <div class="tab-content col-md-8 col-sm-7 col-xs-12">
            <?= \mirocow\yandexmaps\Canvas::widget([
        'htmlOptions' => [
            'style' => 'height: 500px;',
        ],
        'map' => $map,
    ]);?>
        </div>
    </div>
    <div class="contact-form">
    <?php if (!$isFormSent):?>
        <div class="row">
            <div class="col-lg-5 ptb--50">
                <h2>Свяжитесь с нами</h2>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
    </div>
</div>
