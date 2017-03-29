<?php

namespace app\modules\tests\controllers;

use yii\web\Controller;
use yii\helpers\Url;

class FacebookController extends Controller
{
    public function actionIndex() {
        $images = [];

        $files = scandir(Url::base() . 'images/facebook/holiday');
        if(count($files) > 0) {
            foreach ($files as $file) {
                if(substr($file, 0, 1) != '.') {
                    $image = new \stdClass();
                    $image->url = Url::base() . 'images/facebook/holiday/' . $file;
                    array_push($images, $image);
                }
            }
        }

        return $this->render('index', [
            'title' => 'Facebook',
            'images' => $images,
        ]);
    }
}