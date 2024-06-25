<?php
$url = "http://localhost/gamesheet/api/banners.php";

$dadosAPI = file_get_contents($url);
$dadosBanner = json_decode($dadosAPI);
?>

<!-- Slider main container -->
<div data-aos="zoom-in" class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- Slides -->
        <?php
        foreach ($dadosBanner as $dados) {
        ?>
            <div class="swiper-slide text-center">
                <a href="jogos"><img src="<?= $dados->imagem ?>" class="size_img" alt="<?= $dados->nome ?>">
                </a>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<h1 class="h3 fw-bold text-center m-4">Gratuitos</h1>

<div class="d-lg-none d-xl-none d-md-none d-flex justify-content-center">
    <div id="carouselExampleAutoplaying" class="carousel slide d-flex w-50" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/snake/Snake_Hungry_logo.png" class="d-block w-100" alt="Snake_Hungry">
            </div>
            <div class="carousel-item">
                <img src="images/darkLegacy/DarkLegacyLogo.png" class="d-block w-100" alt="Dark_Legacy">
            </div>
            <div class="carousel-item">
                <img src="images/darkLegacy/DarkLegacyLogo.png" class="d-block w-100" alt="Dark_Legacy">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section data-aos="fade-right" class="container d-none d-sm-none d-md-block">
    <div class="glide" data-aos="fade-up">
        <div class="glide__track joao" data-glide-el="track">
            <ul class="glide__slides ">
                <?php
                foreach ($dadosGames as $dados2) {
                ?>
                    <li class="glide__slide card border-0 joao"><a href="game/<?= $dados2->id_game ?>" class="text_azul"><img src="<?= $dados2->card ?>" class="card-img-top size_img2" alt="<?= $dados2->nome ?>">
                            <div class="card-body back_ground p-2">
                                <p class="card-text fw-bold text-white m-0 size_p"><?= $dados2->nome ?></p>
                                <p class="text-white m-0 size_p2">Gratuito para jogar</p>
                            </div>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<!-- bagunca -->
<section data-aos="fade-up">
    <h1 class="h3 fw-bold text-center m-4 mt-5" id="1">Recomendados</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col" style="width: 18rem;">
                <div class="card border-0 mb-2">
                    <?php
                    foreach ($dadosRecomendados as $key => $dados3) {
                        if ($key <= 3) {

                    ?>
                            <a href="recomendados/<?= $dados3->id_game ?>" class="text_azul pb-3 back_card_m">
                                <img src="<?= $dados3->card ?>" class="card-img-top" alt="">
                                <div class="card-body backtext p-2">
                                    <div>
                                        <p class="card-text fw-bold text-white m-0 size_p"><?= $dados3->nome ?></p>
                                        <p class="text-white m-0 size_p2">R$<?= $dados3->preco ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosRecomendados as $key => $dados3) {
                    if ($key <= 3) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0">
                                <a href="recomendados/<?= $dados3->id_game ?>" class="text_azul pb-3 back_card_m">
                                    <img src="<?= $dados3->card ?>" class="card-img-top" alt="">
                                    <div class="card-body backtext p-2">
                                        <div>
                                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados3->nome ?></p>
                                            <p class="text-white m-0 size_p2">R$<?= $dados3->preco ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosRecomendados as $key2 => $dados3) {
                    if ($key2 <= 5) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0">
                                <a href="recomendados/<?= $dados3->id_game ?>" class="text_azul pb-3 back_card_m">
                                    <img src="<?= $dados3->card ?>" class="card-img-top" alt="">
                                    <div class="card-body backtext p-2">
                                        <div>
                                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados3->nome ?></p>
                                            <p class="text-white m-0 size_p2">R$<?= $dados3->preco ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-up">
    <h1 class="h3 fw-bold text-center m-4" id="2">Promoção</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col" style="width: 18rem;">
                <div class="card border-0 mb-2">
                    <?php
                    foreach ($dadosPromo as $key2 => $dados4) {
                        if ($key2 <= 3) {

                    ?>
                            <a href="promo/<?= $dados4->id_game ?>" class="text_azul pb-3 back_card_m">
                                <img src="<?= $dados4->card ?>" class="card-img-top" alt="">
                                <div class="card-body backtext p-2">
                                    <div>
                                        <p class="card-text fw-bold text-white m-0 size_p"><?= $dados4->nome ?></p>
                                        <p class="text-white m-0 size_p2">R$<?= $dados4->preco ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosPromo as $key2 => $dados4) {
                    if ($key2 <= 3) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0">
                                <a href="promo/<?= $dados4->id_game ?>" class="text_azul pb-3 back_card_m">
                                    <img src="<?= $dados4->card ?>" class="card-img-top" alt="">
                                    <div class="card-body backtext p-2">
                                        <div>
                                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados4->nome ?></p>
                                            <p class="text-white m-0 size_p2">R$<?= $dados4->preco ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosPromo as $key2 => $dados4) {
                    if ($key2 <= 5) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0">
                                <a href="promo/<?= $dados4->id_game ?>" class="text_azul pb-3 back_card_m">
                                    <img src="<?= $dados4->card ?>" class="card-img-top" alt="">
                                    <div class="card-body backtext p-2">
                                        <div>
                                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados4->nome ?></p>
                                            <p class="text-white m-0 size_p2">R$<?= $dados4->preco ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-up">
    <h1 class="h3 fw-bold text-center m-4" id="3">Lançamentos</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0 mb-2">
                    <?php
                    foreach ($dadosLanca as $key3 => $dados5) {
                        if ($key3 <= 3) {

                    ?>
                            <a href="lanca/<?= $dados5->id_game ?>" class="text_azul pb-3 back_card_m">
                                <img src="<?= $dados5->card ?>" class="card-img-top" alt="">
                                <div class="card-body backtext p-2">
                                    <div>
                                        <p class="card-text fw-bold text-white m-0 size_p"><?= $dados5->nome ?></p>
                                        <p class="text-white m-0 size_p2">R$<?= $dados5->preco ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col" style="width: 18rem;">
                <div class="card border-0 mb-2">
                    <?php
                    foreach ($dadosLanca as $key3 => $dados5) {
                        if ($key3 <= 3) {

                    ?>
                            <a href="lanca/<?= $dados5->id_game ?>" class="text_azul pb-3 back_card_m">
                                <img src="<?= $dados5->card ?>" class="card-img-top" alt="">
                                <div class="card-body backtext p-2">
                                    <div>
                                        <p class="card-text fw-bold text-white m-0 size_p"><?= $dados5->nome ?></p>
                                        <p class="text-white m-0 size_p2">R$<?= $dados5->preco ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosLanca as $key3 => $dados5) {
                    if ($key3 <= 5) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0">
                                <a href="lanca/<?= $dados5->id_game ?>" class="text_azul pb-3 back_card_m">
                                    <img src="<?= $dados5->card ?>" class="card-img-top" alt="">
                                    <div class="card-body backtext p-2">
                                        <div>
                                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados5->nome ?></p>
                                            <p class="text-white m-0 size_p2">R$<?= $dados5->preco ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>