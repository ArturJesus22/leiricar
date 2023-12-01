<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ClientesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dados--clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?php //= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

<!--    --><?php //= $form->field($model, 'codigopostal') ?>

<!--    --><?php //= $form->field($model, 'localidade') ?>

<!--    --><?php //= $form->field($model, 'rua') ?>

    <?php echo $form->field($model, 'nif') ?>

    <?php  echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
