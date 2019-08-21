<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CallRequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-request-form page-content" style="padding: 15px;">

    <div class="panel panel-red">
        <div class="panel-heading"><?= $action . ' request'?> | <?= !empty($model->name) ? $model->name : ''?></div>
        <div class="panel-body">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date_request')->textInput() ?>

            <?= $form->field($model, 'status')->dropDownList(['0', '1',], ['prompt' => '']) ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>