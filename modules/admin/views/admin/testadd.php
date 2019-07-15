<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\controllers\UploadedFile;
/* @var $this yii\web\View */
/* @var $model app\models\products */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="products-form">

    <hr>

    <?php $form = ActiveForm::begin([
        'id' => 'question_form'
    ]); ?>

    <?= $form->field($model, 'savol')->textArea(['maxlength' => true])->label('Question') ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'ja')->textInput(['maxlength' => true])->label('Answer A') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'jb')->textInput(['maxlength' => true])->label('Answer B') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'jc')->textInput(['maxlength' => true])->label('Answer C') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'jd')->textInput(['maxlength' => true])->label('Answer D') ?>
        </div>
    </div>

    <?= Html::activeHiddenInput($model, 'fan') ?>

    <?= $form->field($model, 'tj')->dropDownList(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D'])->label("Select true answer");?>

    <?= $form->field($model, 'test_id')->textInput(['maxlength' => true, 'value' => $test_id, 'class' => 'sr-only'])->label(false) ?>

    <?= $form->field($model, 'question_id')->textInput(['maxlength' => true, 'class' => 'sr-only'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Add new question', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>