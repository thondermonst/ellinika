<?php

namespace app\modules\tests\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex($id = null) {
        switch($id) {
            case 1:
                $content = 'test1';
                break;
            default:
                $content = 'undefined';
        }
        $title = 'Test 1';

        return $this->render('index', [
            'title' => $title,
            'testContent' => $content,
        ]);
    }
}