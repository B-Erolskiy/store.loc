<div class="form-group field-product-image">
    <label class="control-label" for="product-image">Изображение</label>
    <div class="clearfix"></div>
    <?php use yii\helpers\Html;

    $mainImage = $model->getImage();
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