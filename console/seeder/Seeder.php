<?php

namespace console\seeder;

use console\seeder\tables\NewsTableSeeder;
use console\seeder\tables\UserTableSeeder;
use diecoding\seeder\TableSeeder;

/**
 * Default Seeder
 */
class Seeder extends TableSeeder
{
    /**
     * Default execution
     *
     * @return void
     */
    public function run()
    {
        UserTableSeeder::create()->run();
        NewsTableSeeder::create()->run();
    }
}
