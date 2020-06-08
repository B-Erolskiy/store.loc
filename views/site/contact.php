<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Магазины компании';
/*$map = new \mirocow\yandexmaps\Map('yandex_map', [
    'center' => [55.684758, 37.738521],
    'zoom' => 13,
    // Enable zoom with mouse scroll
    'behaviors' => array('default', 'scrollZoom'),
    'type' => "yandex#map",
], [
        'minZoom' => 1,
        'maxZoom' => 18,
        'controls' => [
            // v 2.1
            'new ymaps.control.ZoomControl({options: {size: "small"}})',
            //'new ymaps.control.TrafficControl({options: {size: "small"}})',
            //'new ymaps.control.GeolocationControl({options: {size: "small"}})',
            'search' => 'new ymaps.control.SearchControl({options: {size: "small"}})',
            //'new ymaps.control.FullscreenControl({options: {size: "small"}})',
            //searchControlProvider: 'yandex#search'
            //'new ymaps.control.RouteEditor({options: {size: "small"}})',
        ],/*
        'objects' => [
            <<<JS
                search.events.add("resultselect", function (result){

                    // Remove old coordinates
                    \$Maps['yandex_map'].geoObjects.each(function(obj){
                        \$Maps['yandex_map'].geoObjects.remove(obj);
                    });

                    // Add selected coordinates
                    var index = result.get('index');
                    var searchControl = \$Maps['yandex_map'].controls.get(1);
                    searchControl.getResult(index).then(function(res) {
                        var coordinates = res.geometry.getCoordinates();
                        $('#coordinates').html('');
                        $('#coordinates').append('<input type="hidden" name="User[coordinates][]" value="'+coordinates[0]+'">');
                        $('#coordinates').append('<input type="hidden" name="User[coordinates][]" value="'+coordinates[1]+'">');
                    });

                });
JS

        ],
    ]
);*/
$map = new \mirocow\yandexmaps\Map('yandex_map', [
    'center' => [55.684758, 37.738521],
    'zoom' => 13,
    // Enable zoom with mouse scroll
    'behaviors' => array('default', 'scrollZoom'),
    'type' => "yandex#map",
    'controls' => [
        'zoomControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl',
        'searchControl'
    ],
    'searchControlProvider' => 'yandex#search',
],
    [
        'minZoom' => 1,
        'maxZoom' => 18,
        'objects' => [
            <<<JS
         var mySearchResults = new ymaps.GeoObjectCollection(null, {
            hintContentLayout: ymaps.templateLayoutFactory.createClass('$[properties.name]')
        });
        console.log(mySearchResults);
        \$Maps['yandex_map'].geoObjects.add(mySearchResults);
         var searchControl = \$Maps['yandex_map'].controls.get('searchControl');

            
                console.log(\$Maps['yandex_map']);
                searchControl.events.add("resultselect", function (result){
                    var index = result.get('index');
                    mySearchControl.getResult(index).then(function (res) {
                       //console.log(res);
                    });
                    // Remove old coordinates
                    \$Maps['yandex_map'].geoObjects.each(function(obj){
                        console.log('2');
                        \$Maps['yandex_map'].geoObjects.remove(obj);
                    });
                });
JS

        ],
    ]
);
?>
<div class="site-contact container">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12">
            <ul class="nav flex-column" role="navigation">
                <?php $i=0;
            foreach ($offices as $office):?>
                <li class="nav-item <?php if(!$i) echo "active"?>">
                <a href="#<?=$office->id?>" class="nav-link active" data-toggle="tab" role="tab" aria-controls="<?=$office->id?>"><?=$office->addess?></a>
                </li>
          <?php $i++; endforeach;?>
            </ul>
        </div>
        <div class="tab-content col-md-8 col-sm-7 col-xs-12">
        <?php $i=0;
        foreach ($offices as $office):?>
            <div class="tab-pane fade show <?php if(!$i) echo "active in"?>" id="<?=$office->id?>" role="tabpanel">
                <span class="ti-pin"></span><h3><?= $office->addess?> </h3>
            <span class="ti-time"></span><p><?= $office->worktime?> .</p>

        </div>
        <?php $i++; endforeach;?>
        </div>
    </div>
<?php

    /*$geoObj = new \mirocow\yandexmaps\GeoObject([
        'geometry' => [

        ],
    ]);*/

    //добавление объекта на карту
    $pm = new \mirocow\yandexmaps\objects\Placemark([55.684758, 37.738521],
        [
            'balloonContentHeader' => 'hello world!',
            'balloonContentBody' => 'hello world!',
            'balloonContentFooter' => 'hello world!'
        ],
        [
            'preset' => 'islands#redIcon',
            'draggable'=>false,
            'events'=>[
                'dragend'=>'function(e){console.log(111);}'
            ],

        ]
    );
    $map->addObject($pm);?>

    <?= \mirocow\yandexmaps\Canvas::widget([
        'htmlOptions' => [
            'style' => 'height: 400px;',
        ],
        'map' => $map,
    ]);

    ?>

    <div id="coordinates"></div>

</div>
