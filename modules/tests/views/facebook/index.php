<?php
use yii\helpers\Url;

$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => Url::toRoute('/tests/index')];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-container">
    <div class="jumbotron">
        jt
    </div>
    <div class="row">
        <div class="col-lg-8">
            row 1 col 1
        </div>
        <div class="col-lg-4">
            row 1 col 2
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            row 2 col 1
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            row 3 col 1
        </div>
        <div class="col-lg-4">
            row 3 col 2
        </div>
        <div class="col-lg-4">
            row 3 col 3
        </div>
    </div>
</div>