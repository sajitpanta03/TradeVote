<?php

namespace console\seeder\tables;

use diecoding\seeder\TableSeeder;
use common\models\User;

/**
 * Handles the creation of seeder `User::tableName()`.
 */
class UserTableSeeder extends TableSeeder
{
    public $truncateTable = false;
    // public $locale = 'en_US';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        
        $count = 1;
        for ($i = 0; $i < $count; $i++) {
            $this->insert(User::tableName(), [
                'username' => $this->faker->word,
				'auth_key' => $this->faker->word,
				'password_hash' => $this->faker->word,
				'password_reset_token' => $this->faker->word,
				'email' => $this->faker->email,
				'status' => 10,
				'type' => 0,
				'created_at' => $this->faker->dateTime()->getTimestamp(),
				'updated_at' => $this->faker->dateTime()->getTimestamp(),
				'verification_token' => $this->faker->word,
            ]);
        }
    }
}
