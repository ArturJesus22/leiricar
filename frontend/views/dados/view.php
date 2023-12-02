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
            'nome',
            [
                'attribute' => 'rua',
                'label' => 'Morada', // Defina o rótulo personalizado aqui
            ],
            [
                'attribute' => 'codigopostal',
                'label' => 'Código Postal', // Defina o rótulo personalizado aqui
            ],
            'localidade',
            [
                'attribute' => 'nif',
                'label' => 'NIF(Número Identificação Fiscal)', // Defina o rótulo personalizado aqui
            ],
            [
                'attribute' => 'telefone',
                'label' => 'Nº Telemóvel', // Defina o rótulo personalizado aqui
            ],
            //'user_id',
        ],
    ]) ?>

    <p>
        <?= Html::a('Atualizar Dados', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>

    </p>

</div>
