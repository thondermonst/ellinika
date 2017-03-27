<?php

namespace app\modules\vkeyboard\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex() {
        $title = 'Virtual Keyboard';

        return $this->render('index', [
            'title' => $title,
        ]);
    }
}