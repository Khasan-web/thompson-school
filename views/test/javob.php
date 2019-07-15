<?php

use app\models\Test;
use app\models\Natijalar;

$session = Yii::$app->session;
$data = $session['javoblar'];
$tug = 0;
$xato = 0;

foreach ($data as $javob) {
    if ($javob['javob'] == Test::findOne($javob['test_id'])->tj) {
        $tug++;
    } else {
        $xato++;
    }
}

$fan = $session['fan'];
$fan = strtolower($fan);
$eng_lvl = '';

// define eng level
if (strpos($fan, 'placement') !== false) {
    if ($tug >= 0 && $tug <= 15) {
        $eng_lvl = 'Beginner';
    } else if ($tug >= 16 && $tug <= 24) {
        $eng_lvl = 'Elementary';
    } else if ($tug >= 25 && $tug <= 32) {
        $eng_lvl = 'Pre-intermediate';
    } else if ($tug >= 33 && $tug <= 39) {
        $eng_lvl = 'Intermediate';
    } else if ($tug >= 40 && $tug <= 45) {
        $eng_lvl = 'Upper Intermediate';
    } else if ($tug >= 46 && $tug <= 50) {
        $eng_lvl = 'Advanced';
    }
}

$model = new Natijalar();
$model->tugri = $tug;
$model->xato = $xato;
$model->fio = $session['fio'];
$model->pochta = $session['mail'];
$model->telefon = $session['tel'];
$model->fan = $session['fan'];
$model->save();
?>

<section id="main" style="margin: 113px 0; background: #fff!important">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-10 col-10 center">
                <?php if (strpos($fan, 'placement') !== false) : ?>
                    <p class="result">Вы набрали <?= $tug ?> из <?= $session['soni'] ?></p>
                    <h3 class="level"><?= $eng_lvl?></h3>
                    <p class="info">Поздравляем! вы сделали первый шаг к достижению ваших целей в Thompson school 🥳</p>
                    <p class="info">Наш менеджер скоро вам перезвонить</p>
                    <a class="back-to-main" href="index.html"><i class="fa fa-arrow-left"></i>Главная страница </a>
                <?php else : ?>
                    <h3 class="level">Вы набрали <?= $tug ?> из <?= $session['soni'] ?></h3>
                    <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, vero! Enim voluptatibus sunt obcaecati, aliquid, corporis unde iure eos.<br /><br />Наш менеджер скоро вам перезвонить</p><a class="back-to-main" href="index.html"><i class="fa fa-arrow-left"></i>Главная страница </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 col-10 graduate"><svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <image xlink:href="/web/img/graduate.png" height="100%" width="100%" />
                </svg></div>
        </div>
    </div>
</section>

<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11988.376790911998!2d69.23824912129805!3d41.30681435132875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dc0bdb203851445!2sTHOMPSON+SCHOOL!5e0!3m2!1sru!2s!4v1559109872512!5m2!1sru!2s" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
</section>