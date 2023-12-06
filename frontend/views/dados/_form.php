<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\User $modelUser */

?>

<div class="dados--clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- Campos do UserDetalhes -->
    <?= $form->field($modelUser, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelUser, 'password')->passwordInput() ?>

    <?= $form->field($modelUser, 'email')->textInput(['maxlength' => true]) ?>

    <!-- Campos do Dados Clientes -->

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigopostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <div style="visibility: hidden;">
        <?= $form->field($modelUser, 'role')->dropDownList(
            [
                'cliente' => 'Cliente',
            ],
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
