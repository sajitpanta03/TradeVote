<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%votes}}`.
 */
class m241008_045936_create_votes_table extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%votes}}', [
            'id' => $this->primaryKey(),
            'votes_type' => $this->smallInteger()->notNull(),
            'post_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('idx-votes-post_id', 'votes', 'post_id');
        $this->addForeignKey('fk-votes-post_id', 'votes', 'post_id', 'posts', 'id', 'CASCADE');
    
        $this->createIndex('idx-votes-user_id', 'votes', 'user_id');
        $this->addForeignKey('fk-votes-user_id', 'votes', 'user_id', 'user', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%votes}}');
        $this->dropForeignKey('fk-votes-post_id', '{{%votes}}');
        $this->dropForeignKey('fk-votes-user_id', '{{%votes}}');
    }
}

