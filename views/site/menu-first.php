<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'First Menu';
?>
<div class="site-menu-first">

    <div class="jumbotron">
        <h1>Menu Pertama!</h1>

        <p class="lead">Silahkan pilih data dibawah ini untuk bisa masuk ke menu berikutnya.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <h2>Table</h2>
                <?=
                \yiister\gentelella\widgets\grid\GridView::widget(
                    [
                        'dataProvider' => $dataProvider,
                        'hover' => true,
                        'columns' => [
                            'id',
                            'name',
                            'status',
                             [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Actions',
                                'headerOptions' => ['style' => 'color:#337ab7'],
                                'template' => '{view}',
                                'buttons' => [
                                    'view' => function ($url, $model) {
                                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                                    'title' => Yii::t('app', 'lead-view'),
                                        ]);
                                    },
                                ],
                                'urlCreator' => function ($action, $model, $key, $index) {
                                    if ($action === 'view') {
                                        $url ='index.php?r=client-login/lead-view&id='.$model->id;
                                        return $url;
                                    }
                                }
                            ],
                        ],
                    ]
                );
                ?>
            </div>
        </div>
    </div>
</div>
