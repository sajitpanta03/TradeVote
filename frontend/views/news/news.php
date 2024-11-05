<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $new): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-img-wrapper position-relative overflow-hidden">
                            <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $new->image), [
                                'class' => 'img-fluid rounded-top', 
                                'alt' => Html::encode($new->title), 
                                'loading' => 'lazy',
                                'style' => 'width: 100%; height: 200px; object-fit: cover;'
                            ]) ?>
                        </div>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline text-muted mb-2 small">
                                <li class="list-inline-item"><?= Yii::$app->formatter->asDate($new->created_at, 'long') ?></li>
                                <li class="list-inline-item"><?= Html::encode($new->author_name) ?></li>
                            </ul>
                            <!-- News title -->
                            <a href="<?= Url::to(['/news/get-single-news', 'news' => $new->id]) ?> ?>" class="text-dark">
                                <h5 class="card-title mb-3"><?= Html::encode($new->title) ?></h5>
                            </a>
                            <a href="<?= Url::to(['/news/get-single-news', 'news' => $new->id]) ?>" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .card-img-wrapper {
        position: relative;
        height: 200px;
        background-color: #f7f7f7;
    }
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }
    .card-title {
        font-weight: 600;
    }
</style>
