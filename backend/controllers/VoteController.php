<?php

namespace backend\controllers;

use yii\console\Controller;
use common\models\Post;

class VoteController extends Controller
{
    public function actionResetVotes()
    {
        Post::updateAll(['upvote' => 0, 'downvote' => 0]);

        file_put_contents('/opt/lampp/htdocs/TradeVote/logs/reset_votes.log', "Reset action started.\n", FILE_APPEND);

        echo "All post upvotes and downvotes have been reset.\n";
    }
}
