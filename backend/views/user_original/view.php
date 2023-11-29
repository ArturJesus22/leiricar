<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = $model->username;

\yii\web\YiiAsset::register($this);
?>
<div class="user-view">


    <?= Html::a('<i class="fas fa-arrow-left"></i> Voltar', ['/user'], ['class' => 'btn btn-dark']); ?>

    <br></br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
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
