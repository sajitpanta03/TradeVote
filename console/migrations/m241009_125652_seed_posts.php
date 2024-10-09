<?php

use yii\db\Migration;

/**
 * Class m241009_125652_seed_posts
 */
class m241009_125652_seed_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('posts', ['name', 'content'], 
        [
            ['Post1', 'lorem12'],
            ['Post2', 'lorem'],
            ['Post2', 'lorem'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241009_125652_seed_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241009_125652_seed_posts cannot be reverted.\n";

        return false;
    }
    */
}
