<?php
namespace common\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['upvote', 'downvote'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    public static function tableName()
    {
        return 'posts';
    }
    
}
?>