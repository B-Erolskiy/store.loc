<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Магазины компании';

foreach ($offices as $office){
    $codeJS .= "var menuItem = " . "\$(" . "'<li class=\"nav-item\"><a id=$office->id class=\"nav-link active\" href=\"#\"> " . "\"$office->addess\"" . "</a></li>'),\n" .
    "placemark$office->id = new ymaps.Placemark([$office->coord1, $office->coord2], 
    { balloonContentHeader: \"$office->addess\", balloonContentBody: \"$office->worktime<br><a href='tel:$office->phone' class='btn btn-danger center-block'>Позвонить</a>\",balloonContentFooter: 'Информация предоставлена:<br/>OOO \"TMART\"', options:{maxWidth: '350px'}},
    {preset: 'islands#redCircleDotIcon'});\n" .
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
    "\$Maps['yandex_map'].geoObjects.add(placemark$office->id);";
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
         // Контейнер для меню.
        
        $codeJS;
        \$Maps['yandex_map'].setBounds(\$Maps['yandex_map'].geoObjects.getBounds());
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
JS
        ],
    ]
);
?>
<div class="site-contact container">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12">
            <ul class="nav flex-column"  id="menu-item" role="navigation"></ul>
        </div>
        <div class="tab-content col-md-8 col-sm-7 col-xs-12">
            <?= \mirocow\yandexmaps\Canvas::widget([
        'htmlOptions' => [
            'style' => 'height: 400px;',
        ],
        'map' => $map,
    ]);?>
        </div>
        <div id="coordinates"> </div>
    </div>
</div>
<?php

    /*$geoObj = new \mirocow\yandexmaps\GeoObject([
        'geometry' => [

        ],
    ]);*/

    //добавление объекта на карту
    /*$pm = new \mirocow\yandexmaps\objects\Placemark([55.684758, 37.738521],
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
    $map->addObject($pm);?>*/



    ?>
    <div id="coordinates"></div>
</div>
