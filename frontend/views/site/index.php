<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'tradevote';

$this->registerJsFile('@web/js/script.js');
?>
<div class="site-index">
  <div class="p-5 mb-4 bg-transparent rounded-3 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container-fluid py-5 text-center text-white">

      <div class="custom_logo mb-5">
        <img src="<?= Yii::getAlias('@web') ?>/photos/tradevote.png" alt="Trade Vote Logo" class="img-fluid animate__animated animate__fadeInUp">
      </div>
      <a href="<?= Url::to(['/frontend/web/site/login']); ?>" class="btn_custom btn-outline-light btn-lg animate__animated animate__fadeInUp">Get Started</a>
    </div>
  </div>
</div>
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="<?= Url::to(['course/all-course']); ?>" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">See all</a>
          </div>
        </div>
      </div>
    </div>

    <?= $this->render('/course/course', ['courses' => $courses]) ?>

    <!-- Mobile See All Button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">See All</a>
      </div>
    </div>
  </div>
</section>

<!-- News -->
<?= $this->render('/news/news', ['news' => $news]) ?>
<!-- /News -->


<style>

</style>