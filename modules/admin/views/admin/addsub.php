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

<div class="products-form page-content" style="padding: 15px;">

    <div class="panel panel-red">
        <div class="panel-heading"><?= Yii::$app->controller->action->id == 'addsub' ? 'Add' : 'Edit'?> test</div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nomi')->textInput(['maxlength' => true])->label('Name') ?>

            <?= $form->field($model, 'tuliq')->textarea(['maxlength' => true])->label('Description') ?>

            <?= $form->field($model, 'rasmi')->fileInput()->label('Image')  ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>