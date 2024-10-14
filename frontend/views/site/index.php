<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container-fluid py-5 text-center text-white">

            <h1 class="text-success fw-bold display-1 mb-4 animate__animated animate__fadeInDown" style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);">
                Welcome to Trade Vote
            </h1>

            <div class="mb-5">
                <img src="<?= Yii::getAlias('@web') ?>/assets/Photos/logo.png" alt="Trade Vote Logo" class="img-fluid animate__animated animate__fadeInUp" style="max-width: 200px;">
            </div>

            <a href="/frontend/web/site/login" class="btn btn-outline-light btn-lg animate__animated animate__fadeInUp">Get Started</a>
        </div>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #0d6efd, #212529);
    }

    .btn-outline-light {
        border: 2px solid white;
        padding: 10px 30px;
    }

    .btn-outline-light:hover {
        background-color: white;
        color: #212529;
    }
</style>
