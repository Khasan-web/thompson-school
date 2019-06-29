<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Talabalar */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container" style="padding: 50px;">
    <div class="talabalar-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fio')->textInput(['maxlength' => true])->label('Name:') ?>

        <?= $form->field($model, 'pochta')->textInput(['maxlength' => true])->label('Mail:') ?>

        <?= $form->field($model, 'tel')->textInput(['maxlength' => true])->label('Phone:') ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Begin', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
