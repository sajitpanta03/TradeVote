<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m241023_040915_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'content' => $this->text(),
            'image' => $this->string()->notNull(),
            'price' => $this->decimal()->notNull(),
            'duration' => $this->string(20),
            'start_date' => $this->date(),
            'end_date' => $this->date(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%course}}');
    }
}
