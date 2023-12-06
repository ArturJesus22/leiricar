<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Carrinho $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="carrinho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_produto')->textInput() ?>

    <?= $form->field($model, 'ID_cliente')->textInput() ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
