<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Produto $model */

$this->title = 'Atualizar Produto: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produto-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
