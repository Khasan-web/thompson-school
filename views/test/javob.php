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


$model = new Natijalar();
$model->tugri = $tug;
$model->xato = $xato;
$model->fio = $session['fio'];
$model->pochta = $session['mail'];
$model->telefon = $session['tel'];
$model->fan = $session['fan'];
$model->save();
?>

<section id="main" style="margin: 113px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-10 col-10 center">
                <h3 class="level">Your score <?= $tug?> from <?= $session['soni']?></h3>
                <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, vero! Enim voluptatibus sunt obcaecati, aliquid, corporis unde iure eos.<br /><br />Наш менеджер скоро вам перезвонить</p><a class="back-to-main" href="index.html"><i class="fa fa-arrow-left"></i>Главная страница </a>
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