<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';

$this->registerCss('.custom_form_signup {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

.btn-primary {
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

input:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
');

?>
<div class="site-signup">
    <h1 class="text-center text-white"><?= Html::encode($this->title) ?></h1>

    <p class="text-center text-white">Please fill out the following fields to signup:</p>

    <div class="row justify-content-center">
        <div class="col-md-6 col-kg-4 custom_form_signup">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput([
                'autofocus' => true,
                'class' => 'form-control rounded'
            ])->label('Username') ?>

            <?= $form->field($model, 'email')->textInput([
                ['class' => 'form-control rounded']
            ]) ?>


            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control rounded'])->label('Password') ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>