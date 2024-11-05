<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- section -->
<?php
$counter = 0;
foreach ($news as $new):
    if ($counter >= 9) break;
    $counter++;
?>
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <!-- new thumb -->
                    <?= Html::img(Url::to('@backendUrl' . '/uploads/' . $new->image), ['class' => 'rounded mx-auto d-block']) ?>
                </div>
            </div>
            <!-- new info -->
            <div class="align-items-center mb-5">
                <p class="mb-0 text-white">Author name: <?= $new->author_name ?></p>
                <p class="text-white"><?= $new->created_at ?></p>
                <div class="">
                    <h2><?= $new->title ?></h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>


            <!-- new details -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>About news</h3>
                    <p><?= $new->content ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

<?php endforeach; ?>

</body>

</html>