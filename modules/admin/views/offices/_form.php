<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Offices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'addess')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coord1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coord2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worktime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
