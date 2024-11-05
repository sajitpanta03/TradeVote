<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BookCourse $model */

$this->title = 'Create Book Course';
$this->params['breadcrumbs'][] = ['label' => 'Book Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
