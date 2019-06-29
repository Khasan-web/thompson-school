<?php

use app\models\Fanlar;

$session = Yii::$app->session;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
    .hide{
        display: none;
    }
</style>
<div id="test">
        <div class="container">
            <h2><?=Fanlar::findOne($sub_id)->nomi?></h2>
            <?php $session['fan'] = Fanlar::findOne($sub_id)->nomi; ?>

            <?php $i = 1; foreach($test as $t):?>
            <div class="question">
          <p><span><?=$i?></span><?=$t->savol?></p>
          <form action="">
            <div>
              <label class="label">
              <?=$t->ja?>
                <input type="radio"  name="radio<?=$t->id?>" value="A-<?=$t->id?>"/><span class="checkmark"></span>
              </label>
            </div>
            <div>
              <label class="label">
              <?=$t->jb?>
                <input type="radio"  name="radio<?=$t->id?>" value="B-<?=$t->id?>"/><span class="checkmark"></span>
              </label>
            </div>
            <div>
              <label class="label"><?=$t->jc?>
                <input type="radio"  name="radio<?=$t->id?>" value="C-<?=$t->id?>"/><span class="checkmark"></span>
              </label>
            </div>
            <div>
              <label class="label"><?=$t->jd?>
                <input type="radio"  name="radio<?=$t->id?>" value="D-<?=$t->id?>"/><span class="checkmark"></span>
              </label>
            </div>
          </form>
        </div>


        <hr>
            <?php $i++; endforeach;?>
            <div id="result"></div>
            <a class="get-result btn" href="/web/test/end">Get my result!</a>
            <br>
            <br>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function () { 
                var selValue = $(this).val();

                $.ajax({
                    url: '/web/test/check',
                    type: 'post',
                    data: {
                        answer: selValue , 
                        _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });

            });
        })
    </script>