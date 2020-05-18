<?php

namespace app\modules\admin\controllers;

use app\controllers\AppController;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->setMeta('TMART | Админ панель');

        return $this->render('index');
    }
}
