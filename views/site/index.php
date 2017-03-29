<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Μαθαίνω ελληνικά';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Μαθαίνω ελληνικά</h1>

        <p class="lead">Welcome to my Greek language courses website. Rest of the site is in Greek.</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Ελληνικά 1.1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute(['/tests/index']) ?>">Ellinika 1.1 &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
