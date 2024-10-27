<?php

namespace backend\controllers;

use common\models\Course;
use common\models\Expert;
use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
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
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['post'],
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $users = User::find()->count();
        $courses = Course::find()->count();
        $experts = Expert::find()->count();

        return $this->render('index', ['users' => $users, 'courses' => $courses, 'experts' => $experts]);
    }

    public function actionPost()
    {

        return $this->render('post');
    }

    public function actionPerviousPostAnalysis()
    {
        return $this->render('pervious_post_analysis');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if (!$model->user->type == 1) {
                Yii::$app->session->setFlash('error', 'Login failed or unauthorized access.');
                return $this->goBack();
            }

            if ($model->login()) {
                return $this->redirect('/backend/web/post/post-data');
            }
            Yii::$app->session->setFlash('error', 'Login failed or unauthorized access.');
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }



    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
