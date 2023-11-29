<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Ivas $model */

$this->title = 'Criar Iva';
$this->params['breadcrumbs'][] = ['label' => 'Ivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ivas-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
