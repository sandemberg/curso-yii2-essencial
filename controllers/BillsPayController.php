<?php

namespace app\controllers;

class BillsPayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
// criado com ./yii gii/controller --controllerClass=app\\controllers\\BillPayController