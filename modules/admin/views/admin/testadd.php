<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\controllers\UploadedFile;
/* @var $this yii\web\View */
/* @var $model app\models\products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form" style="padding: 55px;">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'savol')->textArea(['maxlength' => true])->label('Querstion') ?>

    <?= $form->field($model, 'ja')->textInput(['maxlength' => true])->label('Answer A') ?>
    <?= $form->field($model, 'jb')->textInput(['maxlength' => true])->label('Answer B') ?>
    <?= $form->field($model, 'jc')->textInput(['maxlength' => true])->label('Answer C') ?>
    <?= $form->field($model, 'jd')->textInput(['maxlength' => true])->label('Answer D') ?>
    <?= Html::activeHiddenInput($model, 'fan') ?>
    <?php
        echo $form->field($model, 'tj')->dropDownList(['A' => 'A', 'B' => 'B','C'=>'C','D'=>'D'])->label("Select true answer");
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
