<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BookCourse $model */

$this->title = 'Update Book Course: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Book Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
