<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Usuários');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a(Yii::t('app', 'Cadastrar usuário'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
//                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'username',
                    [
                        'attribute' => 'created_at',
                        'format' => ['date', 'php:d/m/Y H:i']
                    ],
                    [
                        'attribute' => 'updated_at',
                        'format' => ['date', 'php:d/m/Y H:i']
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view}',
                        'buttons' => [
                            'view' => function($url){
                                return Html::a('<i class="fa fa-list"></i> Detalhes', $url, ['class' => 'btn btn-primary btn-flat btn-sm']);
                            }
                        ]
                    ],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
        <div class="box-footer">
        </div>
    </div>

</div>
