<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Registar-se';
?>
<div class="site-signup" style="text-align: center;">
    <br>
    <div class=" row">
        <div class="col-lg-5" style="max-width: 500px;margin: auto;border: 2px solid black;margin-bottom: 50px;background-color:#333;border-radius: 25px;">
            <br>
            <h2 style="color: white;"><?= Html::encode($this->title) ?></h2>

            <p style="color: white;">Por favor preencha os seguintes campos para se registar:</p>
            <br>
            <div style="color: white;text-align:left">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'nome') ?>

                <?= $form->field($model, 'morada') ?>

                <?= $form->field($model, 'codPostal')->label("Código Postal") ?>

                <?= $form->field($model, 'localidade')?>

                <?= $form->field($model, 'telefone') ?>

                <?= $form->field($model, 'nif') ?>

            </div>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-light', 'name' => 'signup-button']) ?>
            </div>
            <br>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>