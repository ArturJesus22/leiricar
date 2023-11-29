<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ProdutosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'Descricao') ?>

    <?= $form->field($model, 'Preco') ?>

    <?= $form->field($model, 'ID_categoria') ?>

    <?php // echo $form->field($model, 'Quantidade') ?>

    <?php // echo $form->field($model, 'id_iva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
