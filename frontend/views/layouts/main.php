<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;


AppAsset::register($this);

$this->registerJsFile('https://code.jquery.com/jquery-3.6.0.min.js', [
  'position' => \yii\web\View::POS_HEAD,
]);

?>
<?php $this->beginPage() ?>

<?php $this->registerCss('
        button .navbar-toggler {
            background: white;
        }
    
        .navbar {
            background-color: #011F39;
            font-weight: 600;
        }
    
        .title_name {
            font-size: 30px;
        }
    
        .title_nameII {
            font-size: 30px;
        }
    
        .login_a {
            font-weight: 600;
            border: solid red;
            border-radius: 10px;
            padding: 5px;
        }

        .login_a:hover {;
            border: solid green;
        }

       
    
        .navabr_toggle button {
            background: #EAEAEA;
        }
    
        .custom_body {
            background: linear-gradient(to right, #6001D2, #B23183);
        }
    
        .custom-alert {
            width: 345px;
            justify-content: end; /* Aligns content within the alert */
            position: absolute;
            top: 20px;
            right: 20px; /* Moves the alert to the right */
            background-color: rgba(255, 255, 255, 0.8) !important;
            color: #721c24 !important; 
            border: 1px solid #f5c6cb !important;
            padding: 15px;
            border-radius: 5px;
            z-index: 9999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
    
        @media (max-width: 720px) {
                .login_a {
                    width: 100%;
                    text-align: center;
                }
            }
        ');

?>

</style>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body class="custom_body d-flex flex-column h-100">
  <?php $this->beginBody() ?>

  <?= $this->render('header') ?>

  <main role="main" class="flex-shrink-0">
    <div class="container">
      <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>

      <!-- Alert placed at the top left -->
      <div class="position-relative">
        <?= Alert::widget([
          'options' => [
            'class' => 'custom-alert',
          ]
        ]); ?>
      </div>

      <?= $content ?>
    </div>
  </main>

  <?= $this->render('footer') ?>
  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage(); ?>