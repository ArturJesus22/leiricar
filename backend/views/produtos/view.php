<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produtos-view">


    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Nome',
            'Descricao:ntext',
            'Preco',
            'ID_categoria',
            'Quantidade',
            'id_iva',
        ],
    ]) ?>

</div>
