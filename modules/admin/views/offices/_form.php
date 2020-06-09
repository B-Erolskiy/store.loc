<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offices */
/* @var $form yii\widgets\ActiveForm */


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
          \$Maps['yandex_map'].geoObjects.options.set('balloonMaxWidth', 200);
        
        // Слушаем клик на карте.
            var myPlacemark;
            \$Maps['yandex_map'].events.add('click', function (e) {
                var coords = e.get('coords');
                document.getElementById('coord1').removeAttribute('readonly');
                    document.getElementById('coord2').removeAttribute('readonly');
                    document.getElementById('coord1').value = coords[0];
                    document.getElementById('coord2').value = coords[1];
                    document.getElementById('coord1').setAttribute('readonly', 'readonly');
                    document.getElementById('coord2').setAttribute('readonly','readonly');
                // Если метка уже создана – просто передвигаем ее.
                if (myPlacemark) {
                    myPlacemark.geometry.setCoordinates(coords);
                }
                // Если нет – создаем.
                else {
                    myPlacemark = createPlacemark(coords);
                    \$Maps['yandex_map'].geoObjects.add(myPlacemark);
                    // Слушаем событие окончания перетаскивания на метке.
                    myPlacemark.events.add('dragend', function () {
                        getAddress(myPlacemark.geometry.getCoordinates());
                    });
                }
                getAddress(coords);
            });
        
            // Создание метки.
            function createPlacemark(coords) {
                return new ymaps.Placemark(coords, {
                    iconCaption: 'поиск...'
                }, {
                    preset: 'islands#redDotIconWithCaption',
                    draggable: true
                });
            }
        
            // Определяем адрес по координатам (обратное геокодирование).
            function getAddress(coords) {
                myPlacemark.properties.set('iconCaption', 'поиск...');
                ymaps.geocode(coords).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0);
                    document.getElementById('addess').value = firstGeoObject.getAddressLine();
                    
                    myPlacemark.properties
                        .set({
                            // Формируем строку с данными об объекте.
                            iconCaption: [
                                // Название населенного пункта или вышестоящее административно-территориальное образование.
                                firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                                // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                                firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                            ].filter(Boolean).join(', '),
                            // В качестве контента балуна задаем строку с адресом объекта.
                            balloonContent: firstGeoObject.getAddressLine()
                        });
                });
            }
        var geoObject;
        /*search.events.add("resultselect", function (result){
            // Remove old coordinates
            \$Maps['yandex_map'].geoObjects.each(function(obj){
                \$Maps['yandex_map'].geoObjects.remove(obj);
            });
            // Add selected coordinates
            var index = result.get('index');
            var coordinates, addess;
            var searchControl = \$Maps['yandex_map'].controls.get(3);
            
            searchControl.getResult(index).then(function(res) {
                
                coordinates = res.geometry.getCoordinates();
                document.getElementById('coord1').removeAttribute('readonly');
                document.getElementById('coord2').removeAttribute('readonly');
                document.getElementById('coord1').value = coordinates[0];
                document.getElementById('coord2').value = coordinates[1];
                document.getElementById('coord1').setAttribute('readonly', 'readonly');
                document.getElementById('coord2').setAttribute('readonly','readonly');
                 \$Maps['yandex_map'].geocode(coordinates).then(function (res) {
                geoObject = res.geoObjeсts.get(0);
                addess = geoObject.properties.get('text');
                console.log(geoObject);
                document.getElementById('addess').value = '1'+ addess;
            });
            });*/
            

                 /*\$Maps['yandex_map'].geocode(coordinates,{results:1}).then(function (res) {
                    var GeoObject = res.geoObjects.get(0);
                    addess = GeoObject.properties.get('text');
                    document.getElementById('addess').value = '1'+ addess;
                    });*/
           
JS
        ],
    ]
);

?>

<div class="offices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worktime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <p>Поля "Координата1" и "Координата2" заполняются автоматически при выборе объекта на карте без возможности изменения. Поле "Адрес" также заполняется автоматически, но с возможностью изменения. Для выбора объекта найдите его в поиске</p>

    <?= \mirocow\yandexmaps\Canvas::widget([
        'htmlOptions' => [
            'style' => 'height: 500px;',
        ],
        'map' => $map,
    ]);?>
    <?= $form->field($model, 'addess')->textInput(['maxlength' => true, 'id' => 'addess']) ?>

    <?= $form->field($model, 'coord1')->textInput(['maxlength' => true, 'id' => 'coord1', 'readonly'=> true]) ?>

    <?= $form->field($model, 'coord2')->textInput(['maxlength' => true, 'id' => 'coord2', 'readonly' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
