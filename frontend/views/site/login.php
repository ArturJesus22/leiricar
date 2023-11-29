<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="text-align: center;">


    <div class="row">
        <div class="col-lg-5" style="max-width: 500px;margin: auto;border: 2px solid black;margin-bottom: 50px;background-color:#111;border-radius: 25px;">            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <br>
            <h2 style="color: white;"><?= Html::encode($this->title) ?></h2>
            <p style="color: white;">Preencha conforme as suas credenciais:</p>

            <div style="color: white;text-align:left">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
