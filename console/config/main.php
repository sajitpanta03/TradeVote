<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => \yii\console\controllers\FixtureController::class,
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'controllerMap' => [
        // ...
        'seeder' => [
            'class' => \diecoding\seeder\SeederController::class,
    
            /** @var string the default command action. */
            'defaultAction' => 'seed',
    
            /** @var string seeder path, support path alias */
            'seederPath' => '@console/seeder',
    
            /** @var string seeder namespace */
            'seederNamespace' => 'console\seeder',
    
            /** 
             * @var string this class look like `$this->seederNamespace\Seeder` 
             * default seeder class run if no class selected, 
             * must instance of `\diecoding\seeder\TableSeeder` 
             */
            'defaultSeederClass' => 'Seeder',
    
            /** @var string tables path, support path alias */
            'tablesPath' => '@console/seeder/tables',
    
            /** @var string seeder table namespace */
            'tableSeederNamespace' => 'console\seeder\tables',
    
            /** @var string model namespace */
            'modelNamespace' => 'common\models',
    
            /** @var string path view template table seeder, support path alias */
            'templateSeederFile' => '@vendor/diecoding/yii2-seeder/src/views/Seeder.php',
    
            /** @var string path view template seeder, support path alias */
            'templateTableFile' => '@vendor/diecoding/yii2-seeder/src/views/TableSeeder.php',
        ],
        // ...
    ],
    'params' => $params,
];
