<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuários'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'username',
                    [
                        'attribute' => 'created_at',
                        'format' => ['date', 'php:d/m/Y H:i']
                    ],
                    [
                        'attribute' => 'updated_at',
                        'format' => ['date', 'php:d/m/Y H:i']
                    ],
                ],
            ]) ?>
        </div>
        <div class="box-footer">
            <p>
                <?= Html::a(Yii::t('app', 'Atualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('app', 'Deletar'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Tem certeza que deseja deletar?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>


</div>
