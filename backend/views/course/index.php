<?php

use common\models\Course;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CourseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="d-flex">
    <!-- Sidebar Section -->

    <!-- Main Content Section -->
    <div class="course-index">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'content:ntext',
                [
                    'attribute' => 'image',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::img(Url::to('@web/uploads/' . $model->image), ['width' => '100']);
                    },
                ],
                'price',
                'duration',
                'start_date',
                'end_date',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Course $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>
</div>
