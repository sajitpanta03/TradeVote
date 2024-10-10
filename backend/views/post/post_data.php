<?php
/* @var $this yii\web\View */
/* @var $posts backend\models\Post[] */

use yii\helpers\Html;

$this->title = 'Posts List';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="d-flex justify-content-end">
    <a href="create">
        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/add--v1.png" alt="add--v1"/>    
    </a>    
</div>

<table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Content</th>
                    <th scope="">Action</th>
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
                    <td>
                        <a class="" href=""><?php echo "edit"; ?>&nbsp;</a>
                        <a class="text-danger" href=""><?php echo "delete"; ?></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts available.</p>
    <?php endif; ?>
</table>