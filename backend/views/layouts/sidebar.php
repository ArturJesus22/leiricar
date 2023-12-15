<?php use yii\helpers\Html; ?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://leiricar-backend.test/index.php" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="LeiriCar" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LeiriCar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?= Html::a(Yii::$app->user->identity->username, ['/site'], ['class' => 'd-block']) ?>    </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Empresa', 'header' => true],
                    ['label' => 'Empresa', 'icon' => 'building', 'url' => ['/empresa/index']],
                    ['label' => 'Utilizadores', 'header' => true],
                    ['label' => 'Gerir Colaboradores', 'icon' => 'users', 'url' => ['/user/index']],
                    ['label' => 'Gerir Clientes', 'icon' => 'user', 'url' => ['/clientes/index']],
                    ['label' => 'Produtos', 'header' => true],
                    ['label' => 'Gerir Produtos', 'icon' => 'cube', 'url' => ['/produtos/index']],
                    ['label' => 'Gerir Imagens', 'icon' => 'fas fa-camera', 'url' => ['/imagens/index']],
                    ['label' => 'Gerir Faturas', 'icon' => 'shopping-cart', 'url' => ['/fatura/index']],
//                    ['label' => 'Lavagens', 'icon' => 'broom', 'url' => ['/site/limpezas']],
                    ['label' => 'Avaliações', 'icon' => 'star', 'url' => ['/avaliacao/index']],
                    ['label' => 'Extras', 'header' => true],
                    ['label' => 'Gerir Ivas', 'icon' => 'fas fa-percent', 'url' => ['/ivas/index']],
                    ['label' => 'Gerir Categorias', 'icon' => 'fas fa-folder', 'url' => ['/categorias/index']],

                    ['label' => 'Sobre Nós', 'header' => true],
                    ['label' => 'Contactos', 'icon' => 'address-book', 'url' => ['/site/contactos']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>