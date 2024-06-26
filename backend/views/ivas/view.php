<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Ivas $model */

$this->title = $model->percentagem;
$this->params['breadcrumbs'][] = ['label' => 'Ivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ivas-view">

    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/ivas'], ['class' => 'btn btn-dark']); ?>
    <br></br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'percentagem',
            'descricao',
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
