<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Clientes $model */

$this->title = 'Criar Cliente';

?>
<div class="clientes-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
