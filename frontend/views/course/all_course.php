<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row justify-content-center mt-5">
    <?php
    foreach ($courses as $course):
    ?>
        <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $course->image), ['class' => 'img-fluid', 'alt' => $course->name]) ?>
                <div class="card-body">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $course->created_at; ?></li>
                    </ul>
                    <a href="course-single.html">
                        <h4 class="card-title"><?= $course->name; ?></h4>
                    </a>
                    <a href="course/get-single-course?id=<?=$course->id ?>" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>