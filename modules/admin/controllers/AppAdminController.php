<?php


namespace app\modules\admin\controllers;
use yii\filters\AccessControl;


use app\controllers\AppController;

class AppAdminController extends AppController
{
    public function behaviors()
    {
        return parent::behaviors();
    }
}