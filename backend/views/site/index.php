<?php

/** @var yii\web\View $this */

$this->title = 'LeiriCar - BackOffice' ;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">LeiriCar BackOffice</h1>
        <p class="lead">Bem-Vindo, <?= Yii::$app->user->identity->username ?> </p>
        <p class="lead">“Individualmente, somos apenas uma gota. Juntos, somos um oceano.”</p>
<!--        <a href="/admin" class="btn btn-primary btn-lg">Área de Gestão</a>-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Leiria Sobre Rodas 2023</h2>
                        <p class="card-text">A participação da LeiriaCar no evento "Leiria sobre Rodas" é motivo de grande orgulho para a empresa. Ao longo dos anos, a LeiriaCar tem demonstrado um compromisso inabalável em promover a paixão pelos automóveis e a cultura automobilística na região de Leiria.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">JorCar</h2>
                        <p class="card-text">Estamos extremamente orgulhosos da parceria com a JorCar. Essa colaboração fortalece nossa capacidade de oferecer soluções de alta qualidade e inovação aos nossos clientes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Drift Land</h2>
                        <p class="card-text">A participação da LeiriaCar no Drift Land enche-nos de orgulho. É uma oportunidade de mostrar nossa paixão por automóveis e performance, compartilhando emoções com entusiastas de todo o país. Estamos ansiosos para acelerar juntos no mundo do Drift.</p>
                    </div>
                    <br/>
                    <br/>
                    <br/>

                </div>
            </div>
        </div>
    </div>
