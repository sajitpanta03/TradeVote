<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vote}}`.
 */
class m241008_045936_create_vote_table extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vote}}', [
            'id' => $this->primaryKey(),
            'votes_type' => $this->smallInteger()->notNull(),
            'post_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('idx-vote-post_id', 'vote', 'post_id');
        $this->addForeignKey('fk-vote-post_id', 'vote', 'post_id', 'post', 'id', 'CASCADE');
    
        $this->createIndex('idx-vote-user_id', 'vote', 'user_id');
        $this->addForeignKey('fk-vote-user_id', 'vote', 'user_id', 'user', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vote}}');
        $this->dropForeignKey('fk-vote-post_id', '{{%vote}}');
        $this->dropForeignKey('fk-vote-user_id', '{{%vote}}');
    }
}

