<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <!-- Basic -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>LeiriCar - Home</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header_section">
    <div class="container">
    <?php
    NavBar::begin([
        'brandLabel' => '<img width="250" src="images/logo.png" alt="#" />',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg custom_nav-container',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home |', 'url' => Yii::$app->homeUrl],
        ['label' => 'Produtos |', 'url' => ['/produto/']],
        ['label' => 'Lavagens |', 'url' => ['/produto/']],
        ['label' => 'Sobre Nós |', 'url' => ['/site/about']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Signup', 'url' => ['/clientes/create']];

    } else {
        $menuItems[] = ['label' => 'Logout('.Yii::$app->user->identity->username.')', 'url' => ['/site/logout']];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    ?>
    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>Endereço:</strong> Estrada Nacional 113, Lote 21, Edificio A, Piso 1 Zona Industrial dos Pousos, 2410-205 Leiria</p>
                        <p><strong>Telefone:</strong> +351 912 960 878</p>
                        <p><strong>EMAIL:</strong> arturjesus324@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Páginas</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Produtos</a></li>
                                        <li><a href="#">Lavagens</a></li>
                                        <li><a href="#">Sobre Nós</a></li>
                                        <li><a href="#">Contactos</a></li>
                                    </ul>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>
</html>
<?php $this->endPage();
