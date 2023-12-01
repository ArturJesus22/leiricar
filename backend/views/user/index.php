<?php

use backend\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colaboradores';

?>
<div class="user-index">


    <p>
        <?= Html::a('Criar Colaborador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'email',
            //'authAssignments.item_name', por fazer objetivo é aparecer a role em cada utilizador

            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',
            [
                'label' => 'Role',
                'value' => function ($model) {
                    // Obtém a role na tabela AuthAssignment
                    $assignment = \backend\models\AuthAssignment::find()
                        ->where(['user_id' => $model->id])
                        ->one();
                    return isset($assignment) ? $assignment->item_name : 'Sem Role';
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
