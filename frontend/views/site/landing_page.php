<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'TradeVote';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom_container site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Home page. You may modify the following file to customize its content:</p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima exercitationem quidem quas dolores perspiciatis enim.</p>
                    <div class="count">
                        <p>Up: +133</p>&nbsp;
                        <p>Down: -123</p>&nbsp;
                        <p>Difference: 0</p>
                    </div>
                    <button type="button" class="btn btn-outline-primary">Up</button>
                    <button type="button" class="btn btn-outline-danger">Down</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .count {
        display: flex;
    }
</style>