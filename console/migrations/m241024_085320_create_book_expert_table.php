<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_expert}}`.
 */
class m241024_085320_create_book_expert_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_expert}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'expert_id' => $this->integer(),
            'booking_time' => $this->date(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
        $this->createIndex('idx-book_expert-user_id', 'book_expert', 'user_id');
        $this->addForeignKey('fk-book_expert-user_id', 'book_expert', 'user_id', 'user', 'id', 'CASCADE');

        $this->createIndex('idx-book_expert-expert_id', 'book_expert', 'expert_id');
        $this->addForeignKey('fk-book_expert-expert_id', 'book_expert', 'expert_id', 'expert', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book_expert}}');
    }
}
