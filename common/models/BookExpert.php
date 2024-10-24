<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book_expert".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $expert_id
 * @property string|null $booking_time
 * @property string|null $created_at
 *
 * @property Expert $expert
 * @property User $user
 */
class BookExpert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_expert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'expert_id'], 'integer'],
            [['booking_time', 'created_at'], 'safe'],
            [['expert_id'], 'exist', 'skipOnError' => true, 'targetClass' => Expert::class, 'targetAttribute' => ['expert_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'expert_id' => 'Expert ID',
            'booking_time' => 'Booking Time',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Expert]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpert()
    {
        return $this->hasOne(Expert::class, ['id' => 'expert_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
