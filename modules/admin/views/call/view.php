<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CallRequest */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Call Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="call-request-view page-content">

    <div class="panel panel-red">
        <div class="panel-heading"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <p>
                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
                <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'phone',
                    // 'date_request',
                    [
                        'attribute' => 'date_request',
                        'value' => date_format(date_create($model->date_request), 'd M Y | H:i:s'),
                    ],
                    [
                        'attribute' => 'status',
                        'value' => !$data->status ? '<span class="text-danger"><i class="fa fa-times"></i></span>' : '<span class="text-success"><i class="fa fa-check"></i></span>',
                        'format' => 'html',
                    ],
                ],
            ]) ?>
        </div>
    </div>

</div>