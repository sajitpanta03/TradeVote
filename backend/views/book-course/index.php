<?php

use common\models\BookCourse;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\BookCourseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Book Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-course-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
            'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'course_id',
                'value' => 'course.name',
                'label' => 'Course Name',
            ],
            [
                'attribute' => 'user_id',
                'value' => 'user.username',
                'label' => 'Username',
            ],
            [
                'attribute' => 'user.email',
                'value' => 'user.email',
                'label' => 'User Email',
            ],
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookCourse $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ]
    ]); ?>

    <?php Pjax::end(); ?>

</div>
