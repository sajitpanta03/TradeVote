<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Html;

$this->registerCss('
.custom_logout_btn {
    color: ;
}')
?>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::tag(
            'div',
            Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'title_name text-white text-decoration-none ']) .
                Html::a(Yii::$app->nameII, Yii::$app->homeUrl, ['class' => 'title_nameII text-warning text-decoration-none']),
            ['class' => 'text-start']
        ),

        'options' => [
            'class' => 'navabr_toggle navbar navbar-expand-md fixed-top',
        ],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], 'linkOptions' => ['class' => 'text-warning']],
        ['label' => 'About', 'url' => ['/site/about'], 'linkOptions' => ['class' => 'text-white']],
        ['label' => 'Contact', 'url' => ['/site/contact'], 'linkOptions' => ['class' => 'text-white']],
    ];

    if (!Yii::$app->user->isGuest) {
        $menuItems[] =   ['label' => 'Vote', 'url' => ['/site/landing-page'], 'linkOptions' => ['class' => 'text-white']];
    }

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup'], 'linkOptions' => ['class' => 'text-white']];
    }

    echo Nav::widget([
        'options' => ['class' => 'fs-5 text-center gap-3 navbar-nav ms-auto mb-2 mb-md-0 text-white'],
        'items' => $menuItems,
    ]);

    if (Yii::$app->user->isGuest) {
        echo Html::tag(
            'div',
            Html::a('Login', ['/site/login'], ['class' => ['login_a fs-4 btn btn-link login text-decoration-none text-white']]),
            ['class' => 'd-flex justify-content-center']
        );
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex text-black'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'custom_logout_btn btn-link  logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>