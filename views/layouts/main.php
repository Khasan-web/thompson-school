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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!-- navbar -->
    <!-- Main Section-->
    <div class="nav-wrapper" <?= Yii::$app->controller->action->id != 'index' ? 'style="background-color: #A61D31"' : '' ?>>
        <div class="container pr-0">
            <!-- Navbar-->
            <nav class="navbar navbar-expand-lg pr-0 pl-0"><a class="navbar-brand lg" href="/"><img src="/web/img/logo-navbar.png" /></a><a class="navbar-brand md" href="index.html"><img src="/web/img/logo-navbar-sm.png" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>
                <div class="nav-contact">
                    <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#features">Почему мы?</a>
                        <li class="nav-item active"><a class="nav-link" href="#course-info">Наши курсы</a></li>
                        <li class="nav-item"><a class="nav-link" href="#comments">Мнения людей</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Наша команда</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Вакансии</a></li>
                        <li class="nav-item">
                            <div class="nav-contact">
                                <p>+998 (78) 122 10 10</p><span class="lg"><img src="/web/img/icons/nav-call.png" /></span><span class="md"><img src="/web/img/icons/nav-call-red.png" /></span><a href="#" data-toggle="modal" data-target="#order-call">заказать звонок </a>
                            </div>
                        </li>
                        <!-- <li class="nav-item lang-sm dropdown-sm">
                                <div class="">
                                    <a class="dropbtn-sm" href="#"><img src="/web/img/icons/world-lang-sm.png" /></a>
                                    <div class="dropdown-content-sm">
                                        <a href="#">Eng</a>
                                        <a href="#" class="active-sm">Ru</a>
                                        <a href="#">Uz</a>
                                    </div>
                                </div>
                        </li> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- navbar end -->


    <!-- content -->
    <?= $content; ?>
    <!-- content end -->


    <!-- footer -->
    <footer>
        <h5>thompson.uz | Thompson school</h5>
    </footer>
    <!-- footer end -->

    <!-- Modal-for-order-call     -->
    <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="order-call-label">Order Call</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group col-lg-12 col-md-10" style="margin-top: 20px">
                            <label class="form-label" for="modal-name">Ваше имя</label>
                            <input class="form-control form-input" id="modal-name" type="text" />
                        </div>
                        <div class="form-group col-lg-12 col-md-10">
                            <label class="form-label" for="modal-phone">Номер телефона</label>
                            <input class="form-control form-input" id="modal-phone" type="text" />
                        </div>
                        <div class="center"><a class="modal-btn btn" href="#" style="background: #a61d31; color:#fff; font-size: 14px; padding: 7px 40px; font-weight: 500; border-radius: 20px; margin-bottom: 20px">Send</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endBody() ?>
    <script>
        // Smooth scrolling
        var scrollLink = $('.nav-link');

        scrollLink.click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: $(this.hash).offset().top + 100
            }, 1000);
        });
    </script>
</body>

</html>
<?php $this->endPage() ?>