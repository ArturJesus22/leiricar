<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */
/** @var backend\models\User $modeluser */

$this->title = 'Atualizar dados do cliente: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Dados Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dados--clientes-update">


    <?= $this->render('_form', [
        'model' => $model,
        'modeluser' => $modeluser,
    ]) ?>

</div>
