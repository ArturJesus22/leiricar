<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = 'Criar Colaborador';

?>
<div class="user-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
