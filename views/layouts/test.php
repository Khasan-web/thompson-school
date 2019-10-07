<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\CallRequest;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

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
      <nav class="navbar navbar-expand-lg pr-0 pl-0 fixed-top nav-test">
        <div class="container">
          <a class="navbar-brand lg" href="/"><img src="/web/img/logo-nav.svg" style="width: 200px" /></a><a class="navbar-brand md" href="/"><img src="/web/img/logo-nav-sm.svg" style="width: 150px" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active"><a class="nav-link" href="/#why"><?= Yii::t('app', 'Почему мы?') ?><span class="sr-only">(current)</span></a>
              <li class="nav-item"><a class="nav-link" href="/#course-info"><?= Yii::t('app', 'Наши курсы')?></a></li>
              <li class="nav-item"><a class="nav-link" href="/#comments"><?= Yii::t('app', 'Мнения людей')?></a></li>
              <li class="nav-item"><a class="nav-link" href="/#team"><?= Yii::t('app', 'Наша команда')?></a></li>
              <li class="nav-item"><a class="nav-link" href="/#contact"><?= Yii::t('app', 'Вакансии')?></a></li>
              <li class="nav-item lang-sm dropdown-sm">
                <div class="lang dropdown">
                  <a class="dropbtn" href="#"><img src="/web/img/icons/world-lang.png" /></a>
                  <div class="dropdown-content pt-2" style="background: #a61d31">
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'en', 'id' => Yii::$app->request->get('id')]) ?>">En</a>
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'ru', 'id' => Yii::$app->request->get('id')]) ?>">Ru</a>
                    <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'uz', 'id' => Yii::$app->request->get('id')]) ?>">Uz</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="nav-contact">
                  <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок') ?></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="nav-contact">
            <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок') ?></a>
          </div>
        </div>
        <div class="lang dropdown">
          <a class="dropbtn" href="#"><img src="/web/img/icons/world-lang.png" /></a>
          <div class="dropdown-content pt-2" style="background: #a61d31; margin-left: 0;">
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'en', 'id' => Yii::$app->request->get('id')]) ?>">En</a>
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'ru', 'id' => Yii::$app->request->get('id')]) ?>">Ru</a>
            <a href="<?= Url::to(["$currentController/$currentAction", 'language' => 'uz', 'id' => Yii::$app->request->get('id')]) ?>">Uz</a>
          </div>
        </div>
    </div>
    </nav>
    <!-- Modal-for-order-call			-->
    <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="order-call-label"><?= Yii::t('app', 'Заказать звонок') ?></h5>
          </div>
          <div class="modal-body">

            <?php
            // getting model and making a form for requesting a call
            $model = new CallRequest();
            $form = ActiveForm::begin() ?>
            <div class="row mt-2 mb-4">
              <div class="form-group col-md-6">
                <label class="form-label" for="callrequest-name"><?= Yii::t('app', 'Ваше имя') ?></label>
                <?= $form->field($model, 'name')->textInput(['class' => 'form-control form-input m-0'])->label(false) ?>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="callrequest-phone"><?= Yii::t('app', 'Номер телефона') ?></label>
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