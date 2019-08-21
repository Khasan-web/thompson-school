<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error text-center">

    <h1><?= Html::encode($this->title) ?></h1>
    <p><?= Yii::t('app', 'Давайте изучать английский на другой странице')?> 😄</p>
    <a class="back-to-main" href="/"><i class="fa fa-arrow-left"></i>Main page </a>


</div>
