<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\admin\assets\AdminAsset;
use yii\helpers\Url;
use app\components\Navbar;
use app\components\AdminNavbar;
use app\models\User;


AdminAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="icon" href="/img/favicon/admin-icon.png" />
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <title><?= Html::encode($this->title) ?> | Admin</title>
    <?php $this->head() ?>
</head>

<body style="overflow-x: hidden;">
    <?php $this->beginBody() ?>

    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" data-intro="&lt;b&gt;Topbar&lt;/b&gt; has other styles with live demo. Go to &lt;b&gt;Layouts-&gt;Header&amp;Topbar&lt;/b&gt; and check it out." class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="<?= Url::to(['/admin/index']) ?>" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Thompson school</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
    </div>
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="/web/img/avatar.jpg" alt="" class="img-circle" /></div>
                        <div class="info">
                            <p>Admin Panel</p>
                            <ul class="list-inline list-unstyled">
                                <li><a href="<?= Url::to(['/site/index']) ?>" data-hover="tooltip"><i class="fa fa-home"></i></a></li>
                                <li><a href="<?= Url::to(['/site/logout']) ?>" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                                <li><a href="<?= Url::to(['/admin/auth']) ?>" data-hover="tooltip"><i class="fa fa-lock"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?= AdminNavbar::widget(); ?>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <?= $content ?>
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">Infinity Roses | Admin Panel</div>
            </div>
            <!--END FOOTER-->
        </div>
        <!--END PAGE WRAPPER-->

        <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>