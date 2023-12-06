<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */

$this->title = $model->nome;
\yii\web\YiiAsset::register($this);
?>
<div class="dados--clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute' => 'user.username',
                'label' => 'Username',
            ],
            [
                'attribute' => 'user.email',
                'label' => 'Email',
            ],
            'nome',
            [
                'attribute' => 'rua',
                'label' => 'Morada',
            ],
            [
                'attribute' => 'codigopostal',
                'label' => 'Código Postal',
            ],
            'localidade',
            [
                'attribute' => 'nif',
                'label' => 'NIF(Número Identificação Fiscal)',
            ],
            [
                'attribute' => 'telefone',
                'label' => 'Nº Telemóvel',
            ],
            //'user_id',
        ],
    ]) ?>

    <p>
        <?= Html::a('Atualizar Dados', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>

    </p>

</div>
