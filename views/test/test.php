<?php

use app\models\Fanlar;

$session = Yii::$app->session;
$fan = Fanlar::findOne($sub_id)

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
  .hide {
    display: none;
  }
</style>
<div id="test">
  <div class="container">
    <p class="result text-center"><?= count($test) ?> <?= Yii::t('app', 'вопросов') ?></p>
    <h2><?= $fan->nomi ?></h2>
    <?php $session['fan'] = $fan->nomi; ?>

    <?php $i = 1;
    foreach ($test as $t) : ?>
      <div class="question">
        <p><span><?= $i ?></span><?= $t->savol ?></p>
        <form action="">
          <div>
            <label class="label">
              <?= $t->ja ?>
              <input type="radio" name="radio<?= $t->id ?>" value="A" data-number="<?= $t->id ?>" /><span class="checkmark"></span>
            </label>
          </div>
          <div>
            <label class="label">
              <?= $t->jb ?>
              <input type="radio" name="radio<?= $t->id ?>" value="B" data-number="<?= $t->id ?>" /><span class="checkmark"></span>
            </label>
          </div>
          <div>
            <label class="label"><?= $t->jc ?>
              <input type="radio" name="radio<?= $t->id ?>" value="C" data-number="<?= $t->id ?>" /><span class="checkmark"></span>
            </label>
          </div>
          <div>
            <label class="label"><?= $t->jd ?>
              <input type="radio" name="radio<?= $t->id ?>" value="D" data-number="<?= $t->id ?>" /><span class="checkmark"></span>
            </label>
          </div>
        </form>
      </div>


      <hr>
    <?php $i++;
    endforeach; ?>
    <div id="result"></div>
    <a class="get-result btn" href="/test/end"><?= Yii::t('app', 'Узнать результат!') ?></a>
    <br>
    <br>
  </div>
</div>

<script>

  var lang = '';
  if (window.location.href.indexOf("en") > -1) {
    lang = 'en';
  } else if (window.location.href.indexOf("uz") > -1) {
    lang = 'uz';
  } else if (window.location.href.indexOf("ru") > -1) {
    lang = 'ru';
  }

  $(document).ready(function() {

    // define click and read all answers
    $('.get-result').click(function() {

      // arr with results
      var results = [];

      // read answers
      $('input[type="radio"]:checked').each(function(i) {
        // push it in results arr
        results.push([
          $(this).data('number'),
          $(this).val(),
        ]);
      });

      console.log(results);

      // send results arr via ajax
      $.ajax({
        url: '/' + lang + '/test/check',
        type: 'post',
        data: {
          results: results,
          fan_id: <?= $fan->id?>,
          _csrf: '<?= Yii::$app->request->getCsrfToken() ?>'
        },
        success: function(data) {
          console.log(data);
        },
        error: function(xml) {
          console.log(xml);
        }
      });


    });

  });
</script>