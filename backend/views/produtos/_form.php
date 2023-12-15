<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use common\models\Ivas;


/** @var yii\web\View $this */
/** @var common\models\Produtos $model */
/** @var yii\widgets\ActiveForm $form */
?>


<div class="produtos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_categoria')->dropDownList(ArrayHelper::map(\common\models\Categorias::find()->all(),
        'ID_categoria', 'nome_categoria'),
        ['prompt'=>'Selecione a Categoria']) ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>


    <?= $form->field($model, 'id_iva')->dropDownList(ArrayHelper::map(Ivas::find()->where(['estado' => 1])->all(),
        'id', 'percentagem'),
        ['prompt' => 'Selecione o IVA']
    )?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
