<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- section -->
<?php
foreach ($courses as $course):  ?>
  <section class="section-sm">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
          <!-- course thumb -->
          <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $course->image), ['class' => 'rounded mx-auto d-block']) ?>
        </div>
      </div>
      <!-- course info -->
      <div class="row align-items-center mb-5">
        <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
          <h2><?= $course->name ?></h2>
        </div>
        <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
          <ul class="list-inline text-xl-center">
            <li class="list-inline-item mr-4 mb-3 mb-sm-0">
              <div class="d-flex align-items-center">
                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">DURATION</h6>
                  <p class="mb-0 text-white"><?= $course->duration ?></p>
                </div>
              </div>
            </li>
            <li class="list-inline-item mr-4 mb-3 mb-sm-0">
              <div class="d-flex align-items-center">
                <i class="ti-wallet text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">FEE</h6>
                  <p class="mb-0 text-white">Rs <?= $course->price ?></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
          <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Apply now</a>
        </div>

        <!-- popup-model of apply now -->
        <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Course Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               Course Name: <p><?= $course->name ?></p>
               Fee: <p><?= $course->price ?></p>
               Application end date: <p><?= $course->end_date ?> 
              </div>
              <div class="modal-footer">
              <a href="<?= Url::to(['apply-now', 'courseId' => $course->id]) ?>" class="btn btn-primary">Apply now</a>
              </div>
            </div>
          </div>
        </div>
        <!--close popup-model of apply now -->

        <!-- border -->
        <div class="col-12 mt-4 order-4">
          <div class="border-bottom border-primary"></div>
        </div>
      </div>

      <!-- Application start date and end date -->
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Application Deadline</h5>
          <p class="text-white"><?= $course->start_date ?> to <?= $course->end_date ?></p>
        </div>
      </div>

      <!-- course details -->
      <div class="row">
        <div class="col-12 mb-4">
          <h3>About Course</h3>
          <p><?= $course->content ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->

<?php endforeach; ?>

</body>

</html>