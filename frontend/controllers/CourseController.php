<?php

namespace frontend\controllers;

use common\models\BookCourse;
use common\models\Course;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;


/**
 * Course controller
 */
class CourseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup', 'landing-page'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    [
                        'actions' => ['landing-page'],
                        'allow' => '@',
                        'roles' => ['@'],
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
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     *
     * @return mixed
     */
    public function actionGetSingleCourse($id)
    {
        $courses = Course::find()->where(['id' => $id])->all();

        return $this->render('get_single_course', ['courses' => $courses]);
    }

    public function actionAllCourse()
    {
        $courses = Course::find()->all();

        return $this->render('all_course', ['courses' => $courses]);        
    }

    public function actionApplyNow($courseId)
    {
        $userId = Yii::$app->user->getId(); 
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/frontend/web/site/login');
        }
        $model = new BookCourse();
        $model->user_id = $userId;
        $model->course_id = $courseId;

        $findUser = BookCourse::find()
            ->select('user_id')
            ->where(['user_id' => $userId])
            ->andWhere(['course_id' => $courseId])
            ->one();

        if ($findUser) {
            Yii::$app->session->setFlash('error', 'Your Course Application was already submitted');
            return $this->redirect('/frontend/web');
        }

        if ($model->save()) {
            Yii::$app->session->setFlash('success', 'You Application is submitted');
            return $this->redirect('/frontend/web');
        } else {
            Yii::$app->session->setFlash('error', 'You Application is submitted');
        }
    }
}
