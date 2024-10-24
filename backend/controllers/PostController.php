<?php

namespace backend\controllers;

use common\models\Post;
use common\models\Vote;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['pervious-post-analysis'],
                        'allow' => '@',
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['create'],
                        'allow' => '@',
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['edit'],
                        'allow' => '@',
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['delete'],
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
        ];
    }

    public function actionPerviousPostAnalysis()
    {
        $currentDate = Yii::$app->formatter->asDate('now', 'php:Y-m-d');

        $previousPostVotes = Vote::find()
            ->select([
                'post_id',
                'post.name AS post_name',
                'SUM(CASE WHEN votes_type = 1 THEN 1 ELSE 0 END) AS upvote_count',
                'SUM(CASE WHEN votes_type = -1 THEN 1 ELSE 0 END) AS downvote_count',
                'post.created_at AS creation',
            ])
            ->joinWith('post')
            ->groupBy(['vote.post_id', 'post.name'])
            ->orderBy(['vote.post_id' => SORT_ASC])
            ->asArray()
            ->all();

        return $this->render('pervious_post_analysis', ['previousPostVotes' => $previousPostVotes]);
    }

    public function actionPostData()
    {
        $posts = Post::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();

        return $this->render('post_data', ['posts' => $posts]);
    }

    public function actionCreate()
    {
        $model = new Post();

        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                $model->image = UploadedFile::getInstance($model, 'image');
                $fileName = time() . '-' . $model->image->extension;
                $model->image->saveAs('uploads/' . $fileName);
                $model->image = $fileName;
                $model->save();
                return $this->redirect(['post-data']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionEdit($id)
    {
        $model = Post::findOne($id);

        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                $model->image = UploadedFile::getInstance($model, 'image');
                $fileName = time() . '-' . $model->image->extension;
                $model->image->saveAs('uploads/' . $fileName);
                $model->image = $fileName;
                $model->save();
                return $this->redirect(['post-data']);
            }
        }
        return $this->render('edit', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Post::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException("This post was not available");
        }

        if (Yii::$app->request->isPost) {
            if ($model->delete()) {
                Yii::$app->session->setFlash('success', 'Post deleted successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Failed to delete the post.');
            }
            return $this->redirect(['post/post-data']);
        } else {
            throw new BadRequestHttpException('Invalid request method.');
        }
    }

}
