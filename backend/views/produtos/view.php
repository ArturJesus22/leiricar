<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produto $model */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produto-view">

    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/produtos'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Nome',
            'Descricao:ntext',
            'Preco',
            'Quantidade',
            'Imagem',
        ],
    ]) ?>

    <p>
        <?= Html::a('Atualizar', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
