<?php
/* @var $this yii\web\View */
/* @var $posts backend\models\Post[] */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Posts List';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1 class="my-4"><?= Html::encode($this->title) ?></h1>

<div class="flash" id="flash">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif;?>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger">
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif;?>
</div>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= Url::to(['post/create']) ?>" class="btn btn-success">
        <img src="../../assets/photos/plus.svg" alt="" style="width: 20px; margin-right: 5px;">
        Create Post
    </a>
</div>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">S.No</th>
            <th scope="col" class="text-center">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($posts)): ?>
            
            <?php foreach ($posts as $index => $post): ?>
                <tr>
                    <th scope="row" class="text-center align-middle"><?= $index + 1 ?></th>
                    <td class="text-center align-middle">
                        <?= Html::img(Yii::getAlias('@web') . '/uploads/' . $post->image, [
                            'alt' => $post->name, 
                            'style' => 'width: 80px; height: 80px; object-fit: cover;'
                        ]) ?>
                    </td>
                    <td class="align-middle"><?= Html::encode($post->name) ?></td>
                    <td class="align-middle"><?= Html::encode($post->content) ?></td>
                    <td class="text-center align-middle">
                        <a href="<?= Url::to(['post/edit', 'id' => $post->id]) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= Url::to(['post/delete', 'id' => $post->id]) ?>" class="btn btn-danger btn-sm"
                           data-method="post" data-confirm="Are you sure you want to delete this item?">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No posts available.</td>
            </tr>
        <?php endif;?>
    </tbody>
</table>
