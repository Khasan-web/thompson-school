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
  <link rel="stylesheet" href="/web/css/test-cards.css" />
  <link rel="stylesheet" href="/web/css/congrat.css" />
  <link rel="stylesheet" href="/web/css/font.css" />
  <link rel="stylesheet" href="/web/css/test.css" />
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>
  <!-- Header-->
  <div id="header">
    <div class="container pr-0">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg pr-0 pl-0"><a class="navbar-brand lg" href="/"><img src="/web/img/logo-navbar.png" /></a><a class="navbar-brand md" href="/"><img src="/web/img/logo-navbar-sm.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active"><a class="nav-link" href="#why">Почему мы?<span class="sr-only">(current)</span></a>
            <li class="nav-item active"><a class="nav-link" href="#course-info">Наши курсы</a></li>
            <li class="nav-item"><a class="nav-link" href="#comments">Мнения людей</a></li>
            <li class="nav-item"><a class="nav-link" href="#team">Наша команда</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Вакансии</a></li>
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
            <li class="nav-item">
              <div class="nav-contact">
                <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="nav-contact">
          <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок</a>
        </div>
      </nav>
      <div class="lang dropdown">
        <a class="dropbtn" href="#"><img src="/web/img/icons/world-lang.png" /></a>
        <div class="dropdown-content pt-2">
          <a href="#">Eng</a>
          <a href="#" class="active">Ru</a>
          <a href="#">Uz</a>
        </div>
      </div>
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
  </div>
  <?= $content ?>
  <footer>
    <h5>thompson.uz | Thompson school</h5>
  </footer>
  <!-- Scripts-->
  <script src="/web/js/libs.min.js"></script>
  <script src="/web/js/main.js"></script>
</body>

</html>