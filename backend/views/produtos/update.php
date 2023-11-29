<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = 'Update Produtos: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produtos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
