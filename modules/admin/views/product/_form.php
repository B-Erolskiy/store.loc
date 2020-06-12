<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-product-category_id has-success">
        <label class="control-label" for="product-category_id">Категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]" aria-invalid="false">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_p', 'model' => $model])?>
        </select>
        <div class="help-block"></div>
    </div>
    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'value' => $model->price/100]) ?>

    <?= $form->field($model, 'description')->widget(\yii2jodit\JoditWidget::className(), [
        'settings' => [
            'buttons'=>[
                'bold', 'strikethrough', 'italic', 'underline', 'eraser',
                '|','source',
                '|','superscript','subscript',
                'Break', 'ul', 'ol',
                '|','outdent','indent',
                '|','font','fontsize','brush','paragraph',
                'Break', 'image','file','video','table','link',
                '|','align','undo','redo',
                'Break', 'selectall','cut','copy','paste','copyformat',
                '|', 'hr','symbol','fullsize','print','about',
            ],
            'height'=>'500px',
            'enableDragAndDropFileToEditor'=>new \yii\web\JsExpression("true"),
        ],
    ]);?>

    <?= $form->field($model, 'keywords_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_tag')->textarea(['rows' => 6]) ?>

    <div class="field-images">
        <div class="form-group field-product-image">
            <label class="control-label" for="product-image">Изображение</label>
            <div class="clearfix"></div>
            <?php $mainImage = $model->getImage();
            if($mainImage->getUrl() !="/yii2images/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.jpg"):?>
                <div class="col-md-4 main-image" style="display: block; float: left;  text-align: center;">
                    <?=  Html::img($mainImage->getUrl(), ['alt' => $model->name, 'title' => $model->name, 'style' => 'width: 300px;']) ?>
                    <a class="btn btn-danger remove-main-image" data-id="<?= $model->id?>" href="<?= \yii\helpers\Url::to(['product/dmimage','id'=> $model->id])?>">X</a>
                </div>
                <div class="clearfix"></div>
            <?php else:?>
                <input type="hidden" name="Product[image]" value=""><input type="file" id="product-image" name="Product[image]">
            <?php endif;?>
            <div class="help-block"></div>
        </div>




        <div class="form-group field-product-gallery">
            <label class="control-label" style="float: left;" for="product-gallery">Галерея</label>
            <div class="clearfix"></div>
            <?php $gallery = $model->getImages();?>
            <?php foreach ($gallery as $image):?>
                <?php if($image->getUrl() =="/yii2images/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.jpg"):?>
                    <div class="clearfix"></div>
                    <?php break;?>
                <?php else:?>
                    <div class="col-md-4 gallery-image" style="display: block; float: left; text-align: center;">
                        <?=  Html::img($image->getUrl(), ['alt' => $model->name, 'title' => $model->name, 'style' => 'width: 300px; ']) ?>
                        <a class="btn btn-danger remove-gallery-image" data-image="<?= $image->getPrimaryKey()?>" data-id="<?= $model->id?>" href="<?= \yii\helpers\Url::to(['product/dgimage','id' => $model->id, 'imageId' => $image->getPrimaryKey()])?>">X</a>
                    </div>


                <?php endif;?>
            <?php endforeach;?>
            <div class="clearfix"></div>
            <input type="hidden" name="Product[gallery][]" value=""><input type="file" id="product-gallery" name="Product[gallery][]" multiple accept="image/*">

        </div>
    </div>


    <?= $form->field($model, 'hit')->dropDownList([ '0'=>'Нет', '1' =>'Да' ]) ?>

    <?= $form->field($model, 'new')->dropDownList([ '0'=>'Нет', '1' =>'Да' ]) ?>

    <?= $form->field($model, 'sale')->dropDownList([ '0'=>'Нет', '1' =>'Да' ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
