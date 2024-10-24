<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row justify-content-center">
    <?php
    $counter = 0;
    foreach ($courses as $course):
        if ($counter >= 9) break;
        $counter++;
    ?>
        <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $course->image), ['class' => 'img-fluid', 'alt' => $course->name]) ?>
                <div class="card-body">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $course->created_at; ?></li>
                    </ul>
                    <a href="<?= Url::to(['course/get-single-course', 'id' => $course->id]); ?>">
                        <h4 class="card-title"><?= $course->name; ?></h4>
                    </a>
                    <a href="<?= Url::to(['course/get-single-course', 'id' => $course->id]); ?>" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>