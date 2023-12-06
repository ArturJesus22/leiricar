<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\AvaliacoesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avaliacoes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?php //= $form->field($model, 'id') ?>

<!--    --><?php //= $form->field($model, 'comentario') ?>

    <?= $form->field($model, 'data_avaliacao') ?>

    <?= $form->field($model, 'avaliacao') ?>

    <?= $form->field($model, 'ID_cliente') ?>

    <?php  $form->field($model, 'ID_produto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
