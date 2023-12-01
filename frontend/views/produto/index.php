<?php

use common\models\Produtos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var common\models\ProdutoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Produtos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="row">
        <?php foreach ($dataProvider->getModels() as $model) {
            echo '<div class="col">';
            echo $this->render('_card', ['model' => $model]);
            echo '</div>';
        } ?>
    </div>

</div>
