<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ClientesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'nif') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Procurar Cliente'), ['class' => 'btn btn-primary']) ?>
<!--        --><?php //= Html::resetButton(Yii::t('app', 'Mostrar Todos'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
