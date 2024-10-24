<?php

use yii\helpers\Html;
?>

<table class="table">
    <thead>
        <tr>
            <th>Creation</th>
            <th>Post Name</th>
            <th>Upvotes</th>
            <th>Downvotes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($previousPostVotes as $postVotes): ?>
            <tr>
                <td><?= Html::encode($postVotes['creation']) ?></td>
                <td><?= Html::encode($postVotes['post_name']) ?></td>
                <td><?= Html::encode($postVotes['upvote_count']) ?></td>
                <td><?= Html::encode($postVotes['downvote_count']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>