<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\modules\admin\models\CallRequest;

$currentController = Yii::$app->controller->id;
$currentAction = Yii::$app->controller->action->id;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta name="author" content="Thompson school" />
  <meta name="keywords" content="курсы английского языка IELTS математика быстрый английский иностранные языки математика для поступления в вузы томпсон скул английский для детей детский английский English courses IELTS mathematics fast english foreign languages mathematics for entry to higher education Thomson schools english for children children english">
  <meta name="description" content="Thompson school - английский, которого вы заслуживаете и многое другое! 🚀✅" />
  <link rel="icon" href="/web/img/icons/favicon.ico" />
  <link rel="stylesheet" href="/web/css/libs.min.css" />
  <link rel="stylesheet" href="/web/css/main.css" />
  <link rel="stylesheet" href="/web/css/circles.css" />
  <link rel="stylesheet" href="/web/css/courses-icons.css" />
  <link rel="stylesheet" href="/web/css/animate.css" />
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>



  <!-- Modal-for-video			-->
  <div class="modal fade" id="video-modal" tabindex="1" role="dialog" aria-labelledby="video-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="mix-width: 80vw">
      <div class="modal-content" style="background: transparent; border: none">
        <div class="modal-body">
          <video class="w-100" id="thompson-video" controls="controls">
            <!-- Put video into video folder-->
            <source src="/web/video/thompson.mp4" type="video/mp4" />Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal-for-order-call			-->
  <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="order-call-label"><?= Yii::t('app', 'Заказать звонок')?></h5>
        </div>
        <div class="modal-body">

          <?php
          // getting model and making a form for requesting a call
          $model = new CallRequest();
          $form = ActiveForm::begin() ?>
          <div class="row mt-2 mb-4">
            <div class="form-group col-md-6">
              <label class="form-label" for="callrequest-name"><?= Yii::t('app', 'Ваше имя')?></label>
              <?= $form->field($model, 'name')->textInput(['class' => 'form-control form-input m-0'])->label(false) ?>
            </div>
            <div class="form-group col-md-6">
              <label class="form-label" for="callrequest-phone"><?= Yii::t('app', 'Номер телефона')?></label>
              <?= $form->field($model, 'phone')->textInput(['class' => 'form-control form-input m-0'])->label(false) ?>
            </div>
          </div>
          <div class="center">
            <?= Html::submitButton('Send', ['class' => 'modal-btn btn', 'value' => 'create_add', 'name' => 'submit', 'style' => 'background: #a61d31; color:#fff; font-size: 14px; padding: 7px 40px; font-weight: 500; border-radius: 20px; margin-bottom: 20px']) ?>
          </div>

          <?php ActiveForm::end() ?>

        </div>
      </div>
    </div>
  </div>



  <?php $this->beginBody() ?>
  <!-- Main Section-->
  <section id="main" style="background-position: center;">
    <div class="home-bg"></div>
    <!-- Header-->
    <div id="header">
      <div class="nav-container fixed-top navbar-wrapper pr-0">
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg pr-0 pl-0 container"><a class="navbar-brand lg" href="/"><img src="/web/img/logo-nav.svg" style="width: 200px" /></a><a class="navbar-brand md" href="/"><img src="/web/img/logo-nav-sm.svg" style="width: 150px" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>
          <div class="nav-contact">
            <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок')?></a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav-item active"><a class="nav-link" href="#why"><?= Yii::t('app', 'Почему мы?') ?><span class="sr-only">(current)</span></a>
              <li class="nav-item active"><a class="nav-link" href="#course-info"><?= Yii::t('app', 'Наши курсы')?></a></li>
              <li class="nav-item"><a class="nav-link" href="#comments"><?= Yii::t('app', 'Мнения людей')?></a></li>
              <li class="nav-item"><a class="nav-link" href="#team"><?= Yii::t('app', 'Наша команда')?></a></li>
              <li class="nav-item"><a class="nav-link" href="#contact"><?= Yii::t('app', 'Вакансии')?></a></li>
              <li class="nav-item">
                <div class="nav-contact">
                  <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок')?> </a>
                </div>
              </li>
              <li class="nav-item lang-sm dropdown-sm">
                <div>
                  <a class="dropbtn-sm" href="#"><img src="/web/img/icons/world-lang-sm.png" /></a>
                  <div class="dropdown-content-sm">
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'en', 'id' => Yii::$app->request->get('id')]) ?>">En</a>
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'ru', 'id' => Yii::$app->request->get('id')]) ?>">Ru</a>
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'uz', 'id' => Yii::$app->request->get('id')]) ?>">Uz</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="lang dropdown">
          <a class="dropbtn" href="#"><img src="/web/img/icons/world-lang.png" /></a>
          <div class="dropdown-content pt-2" style="background: #a61d31">
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'en', 'id' => Yii::$app->request->get('id')]) ?>">En</a>
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'ru', 'id' => Yii::$app->request->get('id')]) ?>">Ru</a>
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'uz', 'id' => Yii::$app->request->get('id')]) ?>">Uz</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Showcase-->
    <div id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 for-stick">
            <h1 class="main-title wow fadeInLeft"><?= Yii::t('app', 'Мы научим вас<span> мощному <br />Английскому Языку<br /></span>и еще многому!')?></h1>
          </div>
        </div>
        <div class="row position-relative">
          <div class="col-lg-6 col-md-8 col-sm-12 bullets">
            <ul class="bullets-item">
              <li class="wow fadeInLeft" data-wow-delay="0.5s"><span><img src="/web/img/icons/bullets-1.png" /></span><?= Yii::t('app', 'Новейшие методы обучения')?></li>
              <li class="wow fadeInLeft" data-wow-delay="1s"><span><img src="/web/img/icons/bullets-2.png" /></span><?= Yii::t('app', 'Подход к каждому ученику')?></li>
              <li class="wow fadeInLeft" data-wow-delay="1.5s"><span><img src="/web/img/icons/bullets-3.png" /></span><?= Yii::t('app', 'Высочайший результат')?></li>
            </ul><a class="test-button btn wow fadeIn" data-wow-delay="2s" href="#target"><?= Yii::t('app', 'Подобрать курс')?></a><br />
            <div class="tip-first wow fadeInLeft" data-wow-delay="2.5s">
              <div class="row">
                <div><img src="/web/img/icons/arrow-up.png" /></div>
                <div class="text"><?= Yii::t('app', '<span>После теста, вы получите<br />лучший курс для вас</span>')?></div>
              </div>
            </div>
          </div>
          <!-- Block-harry-->
          <div class="col-lg-6 position-relative block-harry">
            <div class="hello-harry wow fadeInRight" data-wow-delay="0.5s">
              <img class="undraggable" src="/web/img/hello-stroke.svg" />
              <span><?= Yii::t('app', 'Привет! Я Гарри Томпсон')?></span>
            </div>
            <div class="harry wow fadeInRight"><img class="harry-img" src="/web/img/harry.png" /><a class="video-button" data-toggle="modal" data-target="#video-modal"><span class="triangle"></span></a></div>
            <div class="tip-second wow fadeInLeft" data-wow-delay="2.5s">
              <div><img src="/web/img/icons/arrow-left.png" /></div>
              <div>
                <p class="text"><?= Yii::t('app', 'Посмотрите наше<br />вступительное видео')?></p>
              </div>
            </div>
          </div>
          <!-- Circles and video-sm-->
          <div class="col-lg-4 col-md-12 video-sm d-none">
            <div class="circle-wrapper header-circle">
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
    <div class="section-bottom">
      <div class="circle-down"></div>
    </div>
  </section>

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
  <script src="/web/js/wow.js"></script>
  <script>
    new WOW().init();
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