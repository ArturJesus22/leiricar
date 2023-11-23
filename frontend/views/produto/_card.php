<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $model common\models\Produto */

?>
<div class="card" style="width: 18rem;">
<!--    --><?php //= Html::img($model->getImageUrl(), ['class' => 'card-img-top mx-auto d-block', 'alt' => 'Product Image', 'style' => 'height: 60%; width: 60%;']) ?>
    <div class="card-body">
        <h5 class="card-title"><?= Html::encode($model->Nome) ?></h5>
        <p class="card-text"><?= Html::encode($model->Descricao) ?></p>
        <p class="card-text">Preço: <?= Html::encode($model->Preco) ?> €</p>
        <?= Html::a('Detalhes', ['view', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
    </div>
</div>
