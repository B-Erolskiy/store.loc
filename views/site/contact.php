<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Магазины компании';
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
</div>
