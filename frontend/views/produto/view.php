<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produto $model */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-6">
<!--            --><?php //= Html::img($model->getImageUrl(), ['class' => 'img-responsive', 'alt' => 'Product Image']) ?>
        </div>
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'Nome',
                    [
                        'attribute' => 'Descricao',
                        'label' => 'Descrição',
                    ],
                    [
                        'attribute' => 'Preco',
                        'label' => 'Preço',
                        'value' => function ($model) {
                            return $model->Preco . ' €';
                        }
                    ],
                    'Quantidade',
                    // Add more attributes as needed
                ],
            ]) ?>

            <p>
                <button class="btn btn-primary" type="submit">Adicionar ao carrinho</button>
            </p>
        </div>
    </div>

</div>
