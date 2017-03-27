<?php
use yii\helpers\Url;

$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => Url::toRoute('/tests/index')];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-container">
    <?= $testContent; ?>
</div>