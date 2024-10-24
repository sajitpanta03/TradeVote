<?php

namespace common\models;

use yii\db\ActiveRecord;

class Vote extends ActiveRecord
{
    public static function tableName()
    {
        return 'vote';
    }

    public function rules()
    {
        return [
            [['post_id', 'user_id', 'created_at'], 'required'],
            [['post_id', 'user_id'], 'integer'],
            [['votes_type'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'user_id' => 'User ID',
            'votes_type' => 'Vote Type',
            'created_at' => 'Created At',
        ];
    }

    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}
