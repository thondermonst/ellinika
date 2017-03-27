<?php

namespace app\modules\tests\controllers;

use yii\web\Controller;
use yii\helpers\Url;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex() {
        $title = 'Tests';
        $items = [];

        $items[0] = [];
        $items[0]['label'] = 'Facebook';
        $items[0]['url'] = Url::toRoute('/tests/facebook');

        $items[1] = [];
        $items[1]['label'] = 'Test 1';
        $items[1]['url'] = Url::toRoute(['/tests/test', 'id' => 1]);

        return $this->render('index', [
            'title' => $title,
            'items' => $items,
        ]);
    }
}