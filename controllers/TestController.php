<?php

namespace app\controllers;

use yii\web\Controller;

final class TestController extends Controller
{
    public function actionTest()
    {
        return $this->render('test-test');
    }
    
}


