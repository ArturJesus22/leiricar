<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->dropDownList(
        [
            '' => 'Selecione um cargo', // Opção padrão
            'admin' => 'Admin',
            'funcionario' => 'Funcionário',
        ],
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>

        <?= Html::a('Cancelar', ['/user'], ['class' => 'btn btn-danger']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>