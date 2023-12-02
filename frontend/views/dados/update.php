<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */

$this->title = 'Atualizar Dados: ' . $model->nome;

?>
<div class="dados--clientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
