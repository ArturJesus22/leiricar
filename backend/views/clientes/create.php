<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */

$this->title = 'Create Dados Clientes';
$this->params['breadcrumbs'][] = ['label' => 'Dados Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dados--clientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
