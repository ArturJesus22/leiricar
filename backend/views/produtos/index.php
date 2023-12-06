<?php

use common\models\Produtos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ProdutosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-index">

    <p>
        <?= Html::a('Criar Produtos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [

                //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'Nome',
            'Descricao:ntext',
            'Preco',
            [
                'attribute' => 'categoria.nome_categoria',
                'label' => 'Categoria', 
            ],
            [
                'attribute' => 'iva.percentagem',
                'label' => 'IVA(%)',
            ],
            [
                'attribute' => 'Quantidade',
                'label' => 'Stock',
            ],
            //'id_iva',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produtos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID, 'ID_categoria' => $model->ID_categoria, 'id_iva' => $model->id_iva]);
                 }
            ],
        ],
    ]); ?>


</div>
