<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $model->isNewRecord ? $form->field($model, 'password')->passwordInput(['maxlength' => true])  : $form->field($model, 'new_password')->passwordInput(['maxlength' => true])->label('Senha') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
