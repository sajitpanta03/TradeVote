<?php
namespace common\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['upvote', 'downvote'], 'integer'],
            [['image'], 'file'],
            [['created_at'], 'safe'],
        ];
    }

    public function getVote()
    {
        $this->hasMany(Vote::class, ['post_id' => 'id']);
    }
}
?>