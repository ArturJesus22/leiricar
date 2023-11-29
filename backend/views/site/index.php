<?php

use common\models\Dados_Clientes;
use yii\helpers\Url;
use yii\web\JsExpression;

$this->title = 'LeiriCar - BackOffice';
?>
<?php if (Yii::$app->session->getFlash('error') !== null) { ?>
    <div class="col-lg-6">
        <?= \hail812\adminlte\widgets\Alert::widget([
            'type' => 'danger',
            'body' => Yii::$app->session->getFlash('error'),
        ]) ?>
    </div>
<?php } ?>
<?php if (Yii::$app->session->getFlash('success') !== null) { ?>
    <div class="col-lg-6">
        <?= \hail812\adminlte\widgets\Alert::widget([
            'type' => 'success',
            'body' => "Bem vindo(a),". Yii::$app->user->identity->username. "!",
        ]) ?>
    </div>
<?php } ?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Teste1',
            'text' => 'Clientes Registados',
            'icon' => 'fas fa-user-plus',
            'linkText' => 'Ver Clientes',
            'linkUrl' => Url::toRoute(["/users"]),
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Ainda por fazer',
            'text' => 'Funcionários Registados',
            'icon' => 'fas fa-user-plus',
            'linkText' => 'Ver Funcionários',
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Ainda por fazer',
            'text' => 'Stocks',
            'icon' => 'fas fa-home',
            'linkText' => 'Consultar Stocks',
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Ainda por fazer',
            'text' => 'Categorias',
            'icon' => 'fas fa-industry',
            'linkText' => 'Ver Categorias',
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Ainda por fazer',
            'text' => 'Número de Marcas',
            'icon' => 'fas fa-industry',
            'linkText' => 'Ver Marcas',
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => 'Ainda por fazer',
            'text' => 'Produtos Registados',
            'icon' => 'fas fa-tag',
            'linkText' => 'Ver Produtos',
        ]) ?>
    </div>

    </div>