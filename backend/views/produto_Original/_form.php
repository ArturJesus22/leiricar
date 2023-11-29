<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Produto $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_categoria')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Categorias::find()->all(),
        'ID_categoria', 'nome_categoria'),
        ['prompt'=>'Selecione a Categoria']) ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
