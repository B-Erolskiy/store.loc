<?php


namespace app\modules\admin\controllers;
use yii\filters\AccessControl;
use app\controllers\AppController;



class AppAdminController extends AppController
{
    public function behaviors()
    {
        //разрешение доступа к actions данного контроллера
        //только зарегистрированным пользователям

        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}