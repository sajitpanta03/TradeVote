<?php

namespace backend\controllers;

use backend\models\Post;
use yii\data\Sort;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;


/**
 * Site controller
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['post-data'],
                        'allow' => '@',
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['pervious-post-analysis'],
                        'allow' => '@',
                        'roles' => ['@']
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    public function actionPostData()
    {
        $posts = Post::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();

        return $this->render('post_data', ['posts' => $posts]);
    }

    public function actionPerviousPostAnalysis()
    {
        return $this->render('pervious_post_analysis');
    }
}
