<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\IvasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ivas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?php //= $form->field($model, 'id') ?>

    <?= $form->field($model, 'percentagem') ?>

<!--    --><?php //= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'estado')->dropDownList([
        '' => 'Todos', // Mostra todos os registos
        '1' => 'Ativo',
        '0' => 'Desativo',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
