<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\User $model */
/** @var yii\widgets\ActiveForm $form */
/** @var bool $disableRoleField */

//$isDisabled = isset($disableRoleField) && $disableRoleField === true;
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
        // ['disabled' => $isDisabled] // Desabilita o campo se $isDisabled for true
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>

        <?= Html::a('Cancelar', ['/user'], ['class' => 'btn btn-danger']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
