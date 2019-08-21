<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="page-content" style="display:flex; justify-content: center; padding-top: 150px;">
    <div class="col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">Login Form</div>
            <div class="panel-body pan">


                <?php $form = ActiveForm::begin();?>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName" class="col-md-3 control-label">Username</label>
                            <div class="col-md-9">
                                <div class="input-icon right"><i class="fa fa-user"></i><?= $form->field($model, 'username')->textInput()->label(false); ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <div class="input-icon right"><i class="fa fa-lock"></i><?= $form->field($model, 'password')->passwordInput(['value' => ''])->label(false); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions pal">
                        <div class="form-group mbn">
                            <div class="col-md-offset-3 col-md-6">
                                <?= Html::submitButton('Change', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                <?php ActiveForm::end();?>


            </div>
        </div>
    </div>
</div>