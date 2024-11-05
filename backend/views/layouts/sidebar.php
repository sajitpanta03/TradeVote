<?php

use yii\helpers\Url;

?>

<ul class="mt-0 navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= Url::to(['site/index']) ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TradeVote</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link " href="<?= Url::to(['site/index']) ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="<?= Url::to(['course/index']) ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Course</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="<?= Url::to(['post/post-data']) ?>">
            <i class="fas fa-fw fa-vote-yea"></i>
            <span>Vote</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="<?= Url::to(['news/index']) ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= Url::to(['/book-course']) ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Book Course</span></a>
    </li>
</ul>
