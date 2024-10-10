<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="text-success fw-bold display-4">Welcome to Trade Vote</h1>
            <img src="<?= Yii::getAlias('@web') ?>/assets/Photos/logo.png" alt="">
        </div>
    </div>
</div>

<style>
    body {
        background-color: #212529;
    }
</style>