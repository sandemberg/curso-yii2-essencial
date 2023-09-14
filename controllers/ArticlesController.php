<?php

namespace app\controllers;

class ArticlesController extends \yii\web\Controller
{
    public function actionIndex(int $id=2, int $crypt = 0)
    {
        return $this->render('index',[
            'id' => $id,
            'crypt' => (bool)$crypt
        ]);
    }

}
// criando com ./yii gii/controller --controllerClass=app\\controllers\\ArticlesController