<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';

$this->registerCss('.custom_form_login {
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
<div class="site-login">
    <h1 class="text-center text-white"><?= Html::encode($this->title) ?></h1>

    <p class="text-center text-white">Please fill out the following fields to login:</p>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 custom_form_login">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput([
                'autofocus' => true,
                'class' => 'form-control rounded'
            ])->label('Username') ?>


            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control rounded'])->label('Password') ?>

            <div class="form-group">
                <?= $form->field($model, 'rememberMe')->checkbox()->label('Remember Me') ?>
            </div>

            <div class="text-center my-3">
                If you forgot your password, you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                <br>
                Need a new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
            </div>

            <div class="form-group text-center">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>