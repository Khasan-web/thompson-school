<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="author" content="" />
    <meta name="description" content="Thompson School" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137569787-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-137569787-1');
    </script>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '79a0a44c978c496d960bbe0100b2c8dde97741d5';
        window.smartsupp||(function(d) {
          var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
          s=d.getElementsByTagName('script')[0];c=d.createElement('script');
          c.type='text/javascript';c.charset='utf-8';c.async=true;
          c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <script type="text/javascript">
        fakeLoad();
    </script>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <link rel="icon" href="/web/img/favicon.png" />
    <link rel="stylesheet" href="/web/css/libs.min.css" />
    <link rel="stylesheet" href="/web/css/main.css" />
    <title>Thompson</title>
</head>

<body>
	<?php $this->beginBody() ?>
    <!-- Pre Header -->
    <div id="pre_header">
        <div class="container">
            <div class="row ml-0 mr-0">
                <div class="social-icons col-lg-6 col-md-6 col-sm-4 col-4 pr-0 pl-0">
                    <a class="insta" href=""><i class="fa fa-instagram"></i></a>
                    <a class="fb" href=""><i class="fa fa-facebook-square"></i></a>
                    <a class="tg" href=""><i class="fa fa-telegram"></i></a>
                </div>
                <div class="contacts col-lg-6 col-md-6 col-sm-8 col-8">
                    <div class="wrapper">
                        <p class="first"><i class="fa fa-phone"></i> +998 78 122 10 10</p>
                        <p class="second"><i class="fa fa-email"></i> info@thompson.uz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre Header -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/web/site/index"><img src="//web/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Курсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Преподаватели</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Вакансии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link last" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Showcase -->
    <?=$content?>
    </footer>
    <div id="sub_footer">
        <div class="wow fadeIn" data-wow-delay="0.7s">
            <a class="insta" href=""><i class="fa fa-instagram"></i></a>
            <a class="fb" href=""><i class="fa fa-facebook-square"></i></a>
            <a class="tg" href=""><i class="fa fa-telegram"></i></a>
        </div>
    </div>
    <!-- Footer -->
    <!-- Scripts -->
    <script src="//web/js/libs.min.js"></script>
    <script src="//web/js/script.js"></script>
</body>

</html>