<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Clientes $model */

$this->title = 'Criar Utilizador';
?>
<div class="clientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
