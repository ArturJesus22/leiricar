<?php

use common\models\Dados_Clientes;
use yii\helpers\Url;
use yii\web\JsExpression;
use common\models\User;

$this->title = 'LeiriCar - BackOffice';
?>


    <div class="col-lg-6">
        <?= \hail812\adminlte\widgets\Alert::widget([
            'type' => 'success',
            'body' => "Bem vindo(a), ". Yii::$app->user->identity->username. "!",
        ]) ?>
    </div>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => $numUsersWithFuncionarioRole,
            'text' => 'Funcionários Registados',
            'icon' => 'fas fa-user-plus',
            'linkText' => 'Ver Funcionários',
            'linkUrl' => Url::toRoute(["/user"]),
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => $numUsersWithClienteRole,
            'text' => 'Clientes Registados',
            'icon' => 'fas fa-user-plus',
            'linkText' => 'Ver Clientes',
            'linkUrl' => Url::toRoute(["/clientes"]),
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => $numProdutos,
            'text' => 'Produtos Registados',
            'icon' => 'fas fa-tag',
            'linkText' => 'Ver Produtos',
            'linkUrl' => Url::toRoute(["/produtos"]),
        ]) ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <?= \hail812\adminlte\widgets\SmallBox::widget([
            'title' => $numCategorias,
            'text' => 'Categorias',
            'icon' => 'fas fa-industry',
            'linkText' => 'Ver Categorias',
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
            'text' => 'Número de Marcas',
            'icon' => 'fas fa-industry',
            'linkText' => 'Ver Marcas',
        ]) ?>
    </div>


    </div>