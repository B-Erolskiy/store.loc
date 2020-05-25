<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'created_at')->widget(DateTimePicker::className(), [
        'name' => 'datetime_10',
        'options' => ['placeholder' => 'Выберите время создания'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd hh:i:ss',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'updated_at')->widget(DateTimePicker::className(), [
        'name' => 'datetime_10',
        'options' => ['placeholder' => 'Выберите время изменения'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd hh:i:ss',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '0'=>'Активен', '1' =>'Завершен' ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
