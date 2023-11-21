<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Clientes $model */

$this->title = 'Atualizar Cliente: ' . $model->username;
?>
<div class="clientes-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
