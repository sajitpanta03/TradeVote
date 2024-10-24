<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%expert}}`.
 */
class m241023_084259_create_expert_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%expert}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'content' => $this->text(),
            'image' => $this->string()->notNull(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%expert}}');
    }
}
