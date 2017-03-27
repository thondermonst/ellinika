<?php

namespace app\modules\tests\controllers;

use yii\web\Controller;

class FacebookController extends Controller
{
    public function actionIndex() {
        return $this->render('index', [
            'title' => 'Facebook',
        ]);
    }
}