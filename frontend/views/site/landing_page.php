<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'TradeVote';

$this->registerCss('
.custom_container {
    margin-top: 40px;   
}
    .spinner-hidden {
        display: none;
    }

    .spin {
        height: 16px;
        width: 16px;
    }

    .custom_card {
        color: #011F39;
    }

    .custom_voteup_btn {
        padding: 15px;
        border: none;
        border-radius: 3px;
        background: #32CD34;
        color: white;
        text-decoration: none;
    }

    .custom_votedown_btn {
        padding: 15px;
        border: none;
        border-radius: 3px;
        background: #FF0909;
        color: white;
        text-decoration: none;
    }

    .custom_image_post img {
        width: 144px;
        height: 168px;
        object-fit: contain;
    }
    
');

?>

<div class="custom_container site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Home page. You may modify the following file to customize its content:</p>
    <div class="custom_site site-about">
        <div class="row">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="custom_card col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <div class="row g-0">
                                <div class="custom_image_post col col-md-4">
                                    <?= Html::img(Yii::getAlias('@backendUrl') . '/uploads/' . $post->image) ?>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= Html::encode($post->name) ?></h5>
                                        <p><?= Html::encode($post->content) ?></p>
                                        <div class="count d-flex justify-content-between">
                                            <p class="flex-fill text-center">Up: <?= Html::encode($post->upvote) ?> &nbsp;</p>
                                            <p class="flex-fill text-center">Down: <?= Html::encode($post->downvote) ?> &nbsp;</p>
                                            <p class="flex-fill text-center">Diff: <?= Html::encode($post->upvote - $post->downvote) ?></p>
                                        </div>

                                        <a class="custom_voteup_btn btn-success me-2 voteClick"
                                            data-vote-type="upvote"
                                            data-post-id="<?= Html::encode($post->id) ?>"
                                            href="<?= \yii\helpers\Url::to(['site/cast-vote', 'id' => Yii::$app->user->id, 'type' => 'upvote', 'post_id' => Html::encode($post->id)]) ?>">
                                            <i class="bi bi-hand-thumbs-up-fill"></i> Upvote
                                            <div class="spin spinner-border spinner-hidden" role="status"></div>
                                        </a>

                                        <a class="custom_votedown_btn btn-danger voteClick"
                                            data-vote-type="downvote"
                                            data-post-id="<?= Html::encode($post->id) ?>"
                                            href="<?= \yii\helpers\Url::to(['site/cast-vote', 'id' => Yii::$app->user->id, 'type' => 'downvote', 'post_id' => Html::encode($post->id)]) ?>">
                                            <i class="bi bi-hand-thumbs-down-fill"></i> Downvote
                                            <div class="spin spinner-border spinner-hidden" role="status"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No posts available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
$this->registerJs('
    $(document).ready(function () {
        $(".voteClick").on("click", function (event) {
            event.preventDefault();

            var button = $(this);
            button.find(".spinner-border").removeClass("spinner-hidden");
            
            button.prop("disabled", true);
            
            var voteUrl = button.attr("href");
            
            window.location.href = voteUrl;
        });
    });
');
?>