<!-- Slider main container -->
<div data-aos="zoom-in" class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- Slides -->
        <?php
        foreach ($dadosGames as $dados) {
        ?>
            <div class="swiper-slide text-center">
                <a href="game/<?= $dados->id_game ?>"><img src="<?= $dados->images ?>" class="size_img" alt="<?= $dados->nome ?>">
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

<section data-aos="fade-right" class="container">
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
    <h1 class="h3 fw-bold text-center m-4 mt-5">Recomendados</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col" style="width: 18rem;">
                <?php
                foreach ($dadosRecomendados as $key => $dados3) {
                    if ($key <= 3) {

                ?>
                        <div class="card border-0 mb-2">
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
                <?php
                    }
                }
                ?>
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
    <h1 class="h3 fw-bold text-center m-4">Promoção</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col" style="width: 18rem;">

                <?php
                foreach ($dadosPromo as $key2 => $dados4) {
                    if ($key2 <= 3) {

                ?>
                        <div class="card border-0 mb-2">
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
                <?php
                    }
                }
                ?>
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
    <h1 class="h3 fw-bold text-center m-4">Lançamentos</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col mb-3" style="width: 18rem;">
                <?php
                foreach ($dadosLanca as $key3 => $dados5) {
                    if ($key3 <= 3) {

                ?>
                        <div class="card border-0 mb-2">
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
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($dadosLanca as $key3 => $dados5) {
                    if ($key3 <= 3) {
                ?>
                        <div class="col" style="width: 18rem;">
                            <div class="card border-0 mb-2">
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