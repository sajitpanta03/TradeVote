<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property string|null $created_at
 *
 * @property Booking[] $bookings
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['image'], 'file'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['price'], 'required'],
            [['start_date'], 'required'],
            [['end_date'], 'required'],
            [['duration'], 'string']
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
        return $this->hasMany(Booking::class, ['course_id' => 'id']);
    }
}
