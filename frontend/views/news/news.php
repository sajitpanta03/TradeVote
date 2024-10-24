<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
        <?php  foreach ($news as $new): ?>
            <div class="row justify-content-center">
                <!-- blog post -->
                <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                        <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $new->image), ['class' => 'img-fluid img-thumbnail fit-content"', 'alt' => $new->title]) ?>

                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0"><?= $new->created_at ?></li>
                                <!-- author -->
                                <li class="list-inline-item mr-3 ml-0"><?= $new->author_name ?></li>
                            </ul>
                            <a href="blog-single.html">
                                <h4 class="card-title"><?= $new->title ?></h4>
                            </a>
                            <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</section>