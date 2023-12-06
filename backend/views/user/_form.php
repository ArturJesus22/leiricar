<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\User $model */
/** @var yii\widgets\ActiveForm $form */
/** @var bool $disableRoleField */

//$isDisabled = isset($disableRoleField) && $disableRoleField === true;
?>


<div class="site-signup" style="text-align: center;">
    <br>
    <div class=" row">
        <div class="col-lg-5" style="max-width: 500px;margin: auto;border: 2px solid black;margin-bottom: 50px;background-color:#333;border-radius: 25px;">
            <br>
            <h2 style="color: white;"><?= Html::encode($this->title) ?></h2>

            <br>

            <div style="color: white;text-align:left">

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
            </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>

        <?= Html::a('Cancelar', ['/user'], ['class' => 'btn btn-danger']) ?>
    </div>

            <br>
    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
