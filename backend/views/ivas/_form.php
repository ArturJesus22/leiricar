<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Ivas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ivas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'percentagem')->textInput() ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>

        <?= Html::a('Cancelar', ['/ivas'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
