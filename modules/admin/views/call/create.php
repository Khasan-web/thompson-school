<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CallRequest */

$this->title = Yii::t('app', 'Create Call Request');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Call Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-request-create">

    <?= $this->render('_form', [
        'model' => $model,
        'action' => 'Create',
    ]) ?>

</div>
