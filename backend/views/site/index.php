<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Admin Panel';
?>
<div class="site-index d-flex align-items-center justify-content-center" style="min-height: 100vh; background: linear-gradient(135deg, #1e90ff, #f64f59);">

    <div class="text-center">

        <h1 class="display-1 text-white fw-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            <?= Html::encode($this->title) ?>
        </h1>

        <div class="mt-4">
            <a href="<?= \yii\helpers\Url::to(['post/post-data']) ?>" class="btn btn-outline-light btn-lg mx-2">Manage Posts</a>
        </div>

    </div>
</div>
