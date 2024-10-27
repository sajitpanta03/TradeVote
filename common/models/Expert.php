<?php

namespace common\models;

use common\models\BookExpert;
use Yii;

/**
 * This is the model class for table "expert".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property string $image
 * @property string|null $created_at
 *
 * @property BookExpert[] $bookExperts
 */
class Expert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['image'], 'required'],
            [['created_at'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[BookExperts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookExperts()
    {
        return $this->hasMany(BookExpert::class, ['expert_id' => 'id']);
    }
}
