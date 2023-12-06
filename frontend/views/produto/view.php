<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-REJZ/RwYHH7V5U1Qy6Otrq27Y1oYmP6oyvPqZTz3Q0yVKlUed6l8pu4lAiJmYUF6vAeSDTpKcGl7k+mCD99vvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                    [
                        'attribute' => 'Quantidade',
                        'label' => 'Unidades em Stock',
                    ],
                ],
            ]) ?>

            <p>
                <button class="btn btn-primary" type="submit">Adicionar ao Carrinho <i class="fas fa-plus"></i></button>
            </p>
        </div>
    </div>

</div>
