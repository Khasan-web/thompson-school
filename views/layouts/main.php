<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta name="author" content="" />
  <meta name="description" content="Some text" />
  <link rel="icon" href="/web/img/icons/favicon.png" />
  <link rel="stylesheet" href="/web/css/libs.min.css" />
  <link rel="stylesheet" href="/web/css/main.css" />
  <link rel="stylesheet" href="/web/css/circles.css" />
  <link rel="stylesheet" href="/web/css/courses-icons.css" />
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>
  <!-- Main Section-->
  <section id="main">
    <div class="home-bg"></div>
    <!-- Header-->
    <div id="header">
      <div class="container nav-container pr-0">
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg pr-0 pl-0"><a class="navbar-brand lg" href="/"><img src="/web/img/logo-navbar.png" /></a><a class="navbar-brand md" href="/"><img src="/web/img/logo-navbar-sm.png" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>
          <div class="nav-contact">
            <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav-item active"><a class="nav-link" href="#why">Почему мы?<span class="sr-only">(current)</span></a>
              <li class="nav-item active"><a class="nav-link" href="#course-info">Наши курсы</a></li>
              <li class="nav-item"><a class="nav-link" href="#comments">Мнения людей</a></li>
              <li class="nav-item"><a class="nav-link" href="#team">Наша команда</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Вакансии</a></li>
              <li class="nav-item">
                <div class="nav-contact">
                  <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок </a>
                </div>
              </li>
              <li class="nav-item lang-sm dropdown-sm">
                <div class="">
                  <a class="dropbtn-sm" href="#"><img src="/web/img/icons/world-lang-sm.png" /></a>
                  <div class="dropdown-content-sm">
                    <a href="#">En</a>
                    <a href="#" class="active-sm">Ru</a>
                    <a href="#">Uz</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Modal-for-order-call			-->
      <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="order-call-label">Заказать звонок</h5>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="row mt-2 mb-4">
                  <div class="form-group col-md-6">
                    <label class="form-label" for="modal-name">Ваше имя</label>
                    <input class="form-control form-input m-0" id="modal-name" type="text" />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="modal-phone">Номер телефона</label>
                    <input class="form-control form-input m-0" id="modal-phone" type="text" />
                  </div>
                </div>
                <div class="center"><a class="modal-btn btn" href="#" style="background: #a61d31; color:#fff; font-size: 14px; padding: 7px 40px; font-weight: 500; border-radius: 20px; margin-bottom: 20px">Send</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="lang dropdown">
        <a class="dropbtn" href="#"><img src="/web/img/icons/world-lang.png" /></a>
        <div class="dropdown-content pt-2">
          <a href="#">Eng</a>
          <a href="#" class="active">Ru</a>
          <a href="#">Uz</a>
        </div>
      </div>
    </div>
    <!-- Showcase-->
    <div id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 for-stick">
            <h1 class="main-title">Мы научим вас<span> мощному <br />Английскому Языку<br /></span>и еще многому!</h1>
          </div>
        </div>
        <div class="row position-relative">
          <div class="col-lg-6 col-md-8 col-sm-12 bullets">
            <ul class="bullets-item">
              <li><span><img src="/web/img/icons/bullets-1.png" /></span>Новейшие методы обучения</li>
              <li><span><img src="/web/img/icons/bullets-2.png" /></span>Подход к каждому ученику</li>
              <li><span><img src="/web/img/icons/bullets-3.png" /></span>Высочайший результат</li>
            </ul><a class="test-button btn" href="#target">Подобрать курс!</a><br /><a class="link-to-lang" href="/web/talabalar/testreg?lang=other">Не английский?</a>
            <div class="tip-first">
              <div class="row">
                <div><img src="/web/img/icons/arrow-up.png" /></div>
                <div class="text"><span>После теста, вы получите<br />лучший курс для вас</span></div>
              </div>
            </div>
          </div>
          <!-- Block-harry-->
          <div class="col-lg-6 position-relative block-harry"><img class="hello-harry" src="/web/img/hello-harry.png" />
            <div class="harry"><img class="harry-img" src="/web/img/harry.png" /><a class="video-button" data-toggle="modal" data-target="#video-modal"><span class="triangle"></span></a></div>
            <div class="tip-second">
              <div><img src="/web/img/icons/arrow-left.png" /></div>
              <div>
                <p class="text">Посмотрите наше<br />вступительное видео</p>
              </div>
            </div>
          </div>
          <!-- Circles and video-sm-->
          <div class="col-md-4 col-sm-10 video-sm d-none">
            <div class="circle-wrapper">
              <div class="circle circle-1">
                <div class="circle circle-2">
                  <div class="circle circle-3"></div>
                </div>
              </div>
            </div><a class="video-button-sm" data-toggle="modal" data-target="#video-modal"><span class="triangle"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal-for-video			-->
  <div class="modal fade" id="video-modal" tabindex="1" role="dialog" aria-labelledby="video-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: transparent; border: none">
        <div class="modal-body">
          <video class="w-100" controls="controls">
            <!-- Put video into video folder-->
            <source src="/web/video/thompson.mp4" type="video/mp4" />Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
  <?= $content ?>
  <!-- Map-->
  <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11988.376790911998!2d69.23824912129805!3d41.30681435132875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dc0bdb203851445!2sTHOMPSON+SCHOOL!5e0!3m2!1sru!2s!4v1559109872512!5m2!1sru!2s" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
  </section>
  <!-- Footer-->
  <footer>
    <h5>thompson.uz | Thompson school</h5>
  </footer>
  <!-- Scripts-->
  <script src="/web/js/libs.min.js"></script>
  <script src="/web/js/main.js"></script>
  <script>
    $('a[href^="#"]').click(function() {
          elementClick = $(this).attr("href");
          destination = $(elementClick).offset().top; {
            $('html,body').animate({
              scrollTop: destination
            }, 1000);
          }
          return false;
        })
  </script>
</body>

</html>