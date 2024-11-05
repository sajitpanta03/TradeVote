<?php

use common\models\BookCourse;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Book Course';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="book-course-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
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
                'attribute' => 'username',
                'value' => 'user.username',
                'label' => 'Username',
            ],
            [
                'attribute' => 'email',
                'value' => 'user.email',
                'label' => 'User Email',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookCourse $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>