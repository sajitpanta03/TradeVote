<?php

namespace console\controllers;

use yii\console\Controller;
use common\models\Post;

class VoteController extends Controller
{
    public function actionIndex()
    {
        Post::updateAll(['upvote' => 0, 'downvote' => 0]);

        echo "All post upvotes and downvotes have been reset.\n";
    }
}
