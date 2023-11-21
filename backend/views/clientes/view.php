<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Clientes $model */

$this->title = $model->username;

\yii\web\YiiAsset::register($this);
?>
<div class="clientes-view">

    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/clientes'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'username',
            //'password_hash',
            'email:email',
            'Morada',
            'nif',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja apagar o colaborador?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

</div>
