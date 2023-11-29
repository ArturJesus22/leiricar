<?php

use common\models\Produto;
use common\models\Categorias;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var yii\data\ActiveDataProvider $dataProviderCat */
/** @var common\models\Categorias $model_cat */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">


    <p>
        <?= Html::a('Criar Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'Nome',
            //'Descricao:ntext',
            'Preco',
            //AINDA POR FAZER 'Categorias.nome_categoria',
            'ID_categoria',
            //'Quantidade',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


    <p>
        <?= Html::a('Criar Categoria', ['/categorias/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProviderCat,
        'columns' => [
            'ID_categoria',
            'nome_categoria',
            [

                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Categorias $model_cat, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model_cat->ID_categoria]); //  Buscar os ID_categorias
                }
            ],
        ],
    ]); ?>





</div>
