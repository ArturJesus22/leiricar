<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */
/** @var common\models\User $modelUser */

$this->title = 'Atualizar Dados: ' . $model->nome;

?>
<div class="dados--clientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUser' => $modelUser,
    ]) ?>

</div>
