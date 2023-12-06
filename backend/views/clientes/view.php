<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Dados_Clientes $model */

$this->title = 'Ficha de cliente: '.$model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Dados Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/clientes'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'user.username',
                'label' => 'Utilizador', // Defina o rótulo personalizado aqui
            ],
            //[
              //  'attribute' => 'user.password',
              //  'label' => 'Password', // Defina o rótulo personalizado aqui
            //],
            [
                'attribute' => 'user.email',
                'label' => 'Email',
            ],
            //'id',
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
        <?= Html::a('Atualizar', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id, 'user_id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
