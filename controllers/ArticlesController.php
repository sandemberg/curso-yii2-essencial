<?php

namespace app\controllers;

class ArticlesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
// criando com ./yii gii/controller --controllerClass=app\\controllers\\ArticlesController