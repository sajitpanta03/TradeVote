<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Edit Post';
?>

<div class="">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="post-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


        <?php if (!empty($model->image)): ?>
            <div class="form-group">
                <label>Current Image:</label><br>
                <?= Html::img(Yii::getAlias('@web') . '/uploads/' . $model->image, ['alt' => $model->name, 'width' => '150']) ?>
            </div>
        <?php endif; ?>

        <?= $form->field($model, 'image')->fileInput() ?>
 
        <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('edit', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        
    </div> 

</div>
