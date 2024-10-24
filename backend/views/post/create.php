<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-create container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            <div class="card shadow-lg border-0 mt-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">Create New Post</h2>
                </div>
                <div class="card-body p-4">

                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <div class="mb-3">
                        <?= $form->field($model, 'name')->textInput([
                            'maxlength' => true,
                            'placeholder' => 'Enter post title',
                            'class' => 'form-control'
                        ])->label(false) ?>
                    </div>

                    <div class="mb-3">
                        <?= $form->field($model, 'image', [
                            'template' => '
                                <label class="form-label">Upload Image</label>
                                <div class="custom-file">
                                    {input}
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                {error}
                            '
                        ])->fileInput(['class' => 'custom-file-input', 'id' => 'customFile'])->label(false) ?>
                    </div>

                    <div class="mb-3">
                        <?= $form->field($model, 'content')->textarea([
                            'rows' => 6,
                            'placeholder' => 'Enter post content',
                            'class' => 'form-control'
                        ])->label(false) ?>
                    </div>
                    

                    <div class="form-group text-center">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>