<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FanlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fanlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fanlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fanlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nomi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
