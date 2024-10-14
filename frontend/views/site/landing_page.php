<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'TradeVote';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom_container site-about">
    <h1><?=Html::encode($this->title)?></h1>

    <p>This is the Home page. You may modify the following file to customize its content:</p>
    <div class="custom_container site-about">
        <div class="row">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <?=Html::img(Yii::getAlias('@backendUrl') . '/uploads/' . $post->image, [
    'alt' => $post->name,
    'style' => 'width: 140px; height: 180px; object-fit: cover;',
])?>
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                            <h5 class="card-title"><?=Html::encode($post->name)?></h5>
                            <p><?=Html::encode($post->content)?></p>
                    <div class="count d-flex justify-content-between">
                         <p class="flex-fill text-center">Up: <?=Html::encode($post->upvote)?> &nbsp;</p>
                        <p class="flex-fill text-center">Down: <?=Html::encode($post->downvote)?> &nbsp;</p>
                        <p class="flex-fill text-center">Diff: <?=Html::encode($post->upvote - $post->downvote)?></p>
                     </div>

    <a class="btn btn-success me-2"
       href="<?=\yii\helpers\Url::to(['site/cast-vote', 'id' => Yii::$app->user->id, 'type' => 'upvote', 'post_id' => Html::encode($post->id)])?>">
       <i class="bi bi-hand-thumbs-up-fill"></i> Upvote
    </a>
    <a class="btn btn-danger"
       href="<?=\yii\helpers\Url::to(['site/cast-vote', 'id' => Yii::$app->user->id, 'type' => 'downvote', 'post_id' => Html::encode($post->id)])?>">
       <i class="bi bi-hand-thumbs-down-fill"></i> Downvote
    </a>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else: ?>
                <p>No posts available.</p>
            <?php endif;?>
        </div>
    </div>
</div>