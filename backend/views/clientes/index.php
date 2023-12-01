<?php

use common\models\Dados_Clientes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ClientesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dados Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dados--clientes-index">
    

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            'rua',
            'localidade',
            'codigopostal',
            'nif',
            'telefone',
            //'user_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dados_Clientes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'user_id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>


</div>
