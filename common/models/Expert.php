<?php

namespace common\models;

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
 * @property Booking[] $bookings
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
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::class, ['expert_id' => 'id']);
    }
}
