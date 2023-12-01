<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */
/** @var yii\widgets\ActiveForm $form */
/** @var backend\models\User $modeluser */
?>

<div class="dados--clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/clientes'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= $form->field($modeluser, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modeluser, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modeluser, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigopostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
