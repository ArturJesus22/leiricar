<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = 'Criar Produtos';
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
