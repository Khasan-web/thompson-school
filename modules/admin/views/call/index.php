<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CallRequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Call Requests');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-request-index page-content">

    <div class="panel panel-red">
        <div class="panel-heading"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <div class="table-responsive">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    // 'filterModel' => $searchModel,
                    'layout' => '{items}{pager}',
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'name',
                        'phone',
                        // 'date_request',
                        [
                            'attribute' => 'date_request',
                            'value' => function ($data) {
                                $date = date_create($data->date_request);
                                return date_format($date, 'd M Y | H:i:s');
                            },
                        ],
                        // 'status',
                        [
                            'attribute' => 'status',
                            'value' => function ($data) {
                                return !$data->status ? '<span class="text-danger"><i class="fa fa-times"></i></span>' : '<span class="text-success"><i class="fa fa-check"></i></span>';
                            },
                            'format' => 'html',
                            'label' => 'Status 1 | 0',
                        ],

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{view} {update} {delete}',
                            'headerOptions' => ['style' => 'width: 20%'],
                            'contentOptions' => ['style' => 'text-align: center'],
                            'buttons' => [
                                'view' => function ($url) {
                                    return Html::a(
                                        '<span class="btn btn-info btn-xs"><i class="fa fa-eye"></i>&nbsp;View</span>',
                                        $url,
                                        [
                                            'title' => 'View',
                                            'data-pjax' => '0',
                                        ]
                                    );
                                },
                                'update' => function ($url) {
                                    return Html::a(
                                        '<span class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</span>',
                                        $url,
                                        [
                                            'title' => 'Update',
                                            'data-pjax' => '0',
                                        ]
                                    );
                                },
                                'delete' => function ($url) {
                                    return Html::a('<span class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;Delete</span>', $url, [
                                        'title' => Yii::t('app', 'Delete'),
                                        'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'),
                                        'data-method' => 'post', 'data-pjax' => '0',
                                    ]);
                                }

                            ]
                        ],
                    ],
                ]); ?>
                <?= Html::a(Yii::t('app', 'Create a call request'), ['create'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>




</div>