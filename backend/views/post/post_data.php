<?php
/* @var $this yii\web\View */
/* @var $posts backend\models\Post[] */

use yii\helpers\Html;

$this->title = 'Posts List';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>


<table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Content</th>
                </tr>
            </thead>
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php 
                        echo $post->id;
                        ?>
                    </th>
                    <td><?= Html::encode($post->name) ?></td>
                    <td><?= Html::encode($post->content) ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts available.</p>
    <?php endif; ?>
</table>