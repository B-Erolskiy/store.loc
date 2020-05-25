<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-categories-parent has-success">
        <label class="control-label" for="categories-parent">Родительская категория</label>
        <select id="categories-parent" class="form-control" name="Categories[parent]" aria-invalid="false">
            <option value="0">Нет родительской категории</option>
            <?= \app\components\MenuWidget::widget(['tpl' => 'select', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
