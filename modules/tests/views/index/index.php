<?php
$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-container">
    <h1><?= $title; ?></h1>
    <p>
        Intro
    </p>
    <div class="list-group">
        <?php foreach ($items as $item) : ?>
            <a href="<?= $item['url']; ?>" class="list-group-item"><?= $item['label']; ?></a>
        <?php endforeach; ?>
    </div>
</div>