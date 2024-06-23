<?php
$url = "http://localhost/gamesheet/api/banners.php";

$dadosAPI = file_get_contents($url);
$dadosBanner = json_decode($dadosAPI);
?>

<!-- Slider main container -->
<div class="swiper">
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

<h1 class="h3 fw-bold text-center m-4">Jogos Gratuitos</h1>

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
        
<section class="container d-none d-sm-none d-md-block">
    <div class="glide">
        <div class="glide__track joao" data-glide-el="track">
            <ul class="glide__slides ">
                <?php
                foreach ($dadosGames as $dados2) {
                ?>
                    <li class="glide__slide card border-0 joao"><a href="game/<?= $dados2->id_game?>" class="text_azul"><img src="<?= $dados2->card?>" class="card-img-top size_img2" alt="<?= $dados2->nome ?>">
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
<section>
    <h1 class="h3 fw-bold text-center m-4 mt-5" id="1">Recomendados e em destaque</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/dbd.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/eldenring.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/csgo.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <p class="card-text fw-bold text-white m-0 size_p">Counter Strike 2</p>
                        <p class="text-white m-0 size_p2">R$ 199,90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/dbd.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <div>
                                <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                                <p class="text-white m-0 size_p2">R$ 199,90</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/eldenring.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Elden Ring</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/csgo.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Counter Strike 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/dbd.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <div>
                                <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                                <p class="text-white m-0 size_p2">R$ 199,90</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/eldenring.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Elden Ring</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/csgo.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Counter Strike 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/gta.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Grand Theft Auto V</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/forza.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Forza Horizon 5</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>
</section>

<section>
    <h1 class="h3 fw-bold text-center m-4" id="2">Jogos em Promoção</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/dbd.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/eldenring.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/csgo.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <p class="card-text fw-bold text-white m-0 size_p">Counter Strike 2</p>
                        <p class="text-white m-0 size_p2">R$ 199,90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/b4b.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Back 4 Blood</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/avatar.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Avatar Frontiers of...</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/asseto.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Assetto Corsa</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/b4b.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Back 4 Blood</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/avatar.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Avatar Frontiers of...</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/asseto.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Assetto Corsa</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/dying.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Dying Light</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/forza.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Forza Horizon 5</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>
</section>

<section>
    <h1 class="h3 fw-bold text-center m-4" id="3">Lançamentos</h1>

    <section class="container text-center d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="row row-cols-2 justify-content-center">
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/dbd.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/eldenring.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <div>
                            <p class="card-text fw-bold text-white m-0 size_p">Dead by Daylight</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 18rem;">
                <div class="card border-0">
                    <img src="images/outros_jogos/csgo.png" class="card-img-top" alt="">
                    <div class="card-body backtext p-2">
                        <p class="card-text fw-bold text-white m-0 size_p">Counter Strike 2</p>
                        <p class="text-white m-0 size_p2">R$ 199,90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </section>

    <div class="d-xl-none d-sm-none d-none d-md-block">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/deadisland2.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Dead Island 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/hades2.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Hades 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/Vrising.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">V Rising</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>

    <div class="d-none d-md-none d-lg-none d-xl-block">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/deadisland2.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Dead Island 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/hades2.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Hades 2</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/Vrising.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">V Rising</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/tekken8.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Tekken 8</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 18rem;">
                    <div class="card border-0">
                        <img src="images/outros_jogos/dragon.png" class="card-img-top" alt="">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p">Dragon ball Sparking Zero</p>
                            <p class="text-white m-0 size_p2">R$ 199,90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="text_azul">
                <p class="row p-2 fw-bold text-white">mostrar mais...</p>
            </a>
        </div>
    </div>
</section>