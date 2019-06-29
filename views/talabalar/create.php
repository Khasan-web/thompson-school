<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Talabalar */

$this->title = 'Create Talabalar';
$this->params['breadcrumbs'][] = ['label' => 'Talabalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talabalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
