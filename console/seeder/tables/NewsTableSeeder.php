<?php

namespace console\seeder\tables;

use diecoding\seeder\TableSeeder;
use common\models\News;

/**
 * Handles the creation of seeder `News::tableName()`.
 */
class NewsTableSeeder extends TableSeeder
{
    // public $truncateTable = false;
    // public $locale = 'en_US';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        
        $count = 10;
        for ($i = 0; $i < $count; $i++) {
            $this->insert(News::tableName(), [
                'title' => $this->faker->word,
				'content' => $this->faker->word,
				'image' => $this->faker->word,
				'author_name' => $this->faker->word,
				'created_at' => $this->faker->dateTime()->format("Y-m-d H:i:s"),
            ]);
        }
    }
}
