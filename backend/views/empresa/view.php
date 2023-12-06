<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Empresa $model */

$this->title = $model->designacaoSocial;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="empresa-view">

    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/empresa'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'designacaoSocial',
            'email:email',
            'telefone',
            'nif',
            'morada',
            'codigoPostal',
            'localidade',
            'capitalSocial',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
