<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_course}}`.
 */
class m241024_085138_create_book_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_course}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'course_id' => $this->integer(),
            'created_at' => $this->date()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->createIndex('idx-book_course-user_id', 'book_course', 'user_id');
        $this->addForeignKey('fk-book_course-user_id', 'book_course', 'user_id', 'user', 'id', 'CASCADE');

        $this->createIndex('idx-book_course-course_id', 'book_course', 'course_id');
        $this->addForeignKey('fk-book_course-course-course_id', 'book_course', 'course_id', 'course', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book_course}}');
    }
}
