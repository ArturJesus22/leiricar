<?php

use yii\helpers\Url;

?>
<link href="/css/cart.css" rel="stylesheet" />
<section class="h-100 h-custom">
    <div class="container py-12 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-11">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">

                                    <!-- Titulo -->
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Carrinho:</h1>
                                    </div>

                                    <div class="scroll" style="height: 25em;padding: 3%">
                                            <hr class="my-4">
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">

                                                <!-- Imagem do Produto -->
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="/img/" class="img-fluid rounded-3">
                                                </div>

                                                <div class="col-md-3 col-lg-3 col-xl-3">

                                                    <a href="" style="text-decoration:none">
                                                        <!-- Nome do Produto -->
                                                        <h6 class="text-muted"></h6>
                                                    </a>

                                                </div>

                                                <!-- Quantidade do Produto -->
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button style="padding: 6px 15px;" class="btn btn-outline-dark" data-product="" onclick="changeQuantity(this, -1)">-</button>
                                                    <input style="max-width:4em;text-align:center;" data-product="" type="number" name="quantityInput" value="">
                                                    <button class="btn btn-outline-dark" data-product="" onclick="changeQuantity(this, 1)">+</button>
                                                </div>

                                                <!-- Preço do Produto -->
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 data-product="" name="price" class="mb-0">
                                                        €</h6>
                                                </div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">

                                                <!-- Botão de remover o Produto -->
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a data-method="POST" class="pointer cross" style='text-decoration:none ' onclick="remove('Pretende remover este produto do carrinho?', '')">
                                                        <button class="btn btn-outline-danger">
                                                            <i class="bi bi-x-lg"></i>
                                                        </button>
                                                    </a>
                                                </div>

                                            </div>

                                    </div>

                                    <!-- Limpar Carrinho -->
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a data-method="POST" class="text-body pointer" id="clearCart" onclick="remove('Pretende limpar o carrinho?', '')">Remover Tudo</a></h6>
                                    </div>
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a id="backToHome" href="<?= Url::home() ?>" class="text-body">
                                                <svg width="1em" height="1em" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.249 3.625l2.323-2.266L5.302.125.801 4.5l4.501 4.375 1.27-1.234-2.323-2.266h14.558v-1.75H4.249z" fill="currentColor"></path>
                                                </svg>
                                                Voltar
                                            </a></h6>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 bg-grey" style="background-color: #222;">
                                <div class="p-5" style="color:white">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Lista do carrinho</h3>
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 id="totalProducts">
                                            Número de Artigos:
                                            <h6>5</h6>
                                        </h5>
                                    </div>


                                    <div class="mb-1">
                                        <div class="form-outline">
                                            <div class="row">
                                            </div>
                                            <form action="" method="post">
                                                <hr class="my-4">

                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-uppercase">Subtotal</h6>
                                                    <h6 id="subtotalPrice" data-subtotal="">
                                                        <h6>0.00 €</h6>
                                                </div>

                                                <div class="d-flex justify-content-between mb-2">
                                                    <h5 class="text-uppercase">Total</h5>
                                                    <h5>0.00 €</h5>
                                                </div>


                                                    <button id="comprar" class="btn btn-dark btn-block btn-lg mt-4" style="background-color:white;color:black" type="submit">Finalizar Compra</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
