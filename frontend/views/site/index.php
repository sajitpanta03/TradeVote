<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Trade Vote';

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



<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="events.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
            <div class="card-date"><span>18</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
            <div class="card-date"><span>21</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
            <div class="card-date"><span>23</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="course.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Our Teachers</h2>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Jacke Masito</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                    class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                    class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                    class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                    class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Clark Malik</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                    class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                    class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                    class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                    class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">John Doe</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                    class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                    class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                    class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                    class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- blog -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest News</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div
          class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
            </ul>
            <a href="blog-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
            </a>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
            <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div
          class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
            </ul>
            <a href="blog-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
            </a>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
            <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div
          class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
            </ul>
            <a href="blog-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
            </a>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
            <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- /blog -->


<style>

</style>