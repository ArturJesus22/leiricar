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

<!--    --><?php //= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Nome') ?>

<!--    --><?php //= $form->field($model, 'Descricao') ?>

<!--    --><?php //= $form->field($model, 'Preco') ?>

<!--    --><?php //= $form->field($model, 'ID_categoria') ?>
<!--    --><?php //= $form->field($model, 'nomeCategoria') ?>

    <?php echo $form->field($model, 'Quantidade') ?>

    <?php // echo $form->field($model, 'id_iva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
