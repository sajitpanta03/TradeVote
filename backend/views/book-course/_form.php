<?php

use common\models\Course;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\BookCourse $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="book-course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(
            User::find()->all(),
            'id',
            'username'
        ),
        ['prompt' => 'Select a User']
    ) ?>

    <?= $form->field($model, 'course_id')->dropDownList(
        ArrayHelper::map(
            Course::find()->all(),
            'id',
            'name'
        ),
        ['prompt' => 'Select a course']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>