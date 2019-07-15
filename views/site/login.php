<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="red-form container">
        <div class="col-lg-6 form mx-auto">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]); ?>
            <div class="form-row">
                <div class="form-group col-md-6 mb-0">
                    <label class="form-label" for="name-contact">Логин</label>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-input form-control'])->label(false) ?>
                </div>
                <div class="form-group col-md-6 mb-0">
                    <label class="form-label" for="name-contact">Пароль</label>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-input form-control'])->label(false) ?>
                </div>
            </div>
            <div class="for-btn">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button', 'style' => 'border: none']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>