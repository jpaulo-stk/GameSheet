<?php
$url = "http://localhost/gamesheet/api/banners.php";
$url2 = "http://localhost/gamesheet/api/banners_game_free.php";

$dadosAPI = file_get_contents($url);
$dadosBanner = json_decode($dadosAPI);

$dadosAPI2 = file_get_contents($url2);
$dadosBanner2 = json_decode($dadosAPI2);
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
                <a href="<?= $dados->id_game ?>"><img src="<?= $dados->imagem ?>" class="size_img" alt="<?= $dados->nome ?>">
                </a>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<h1 class="h4 text-center m-3">Jogos Gratuitos</h1>

<div class="d-flex justify-content-center">
    <div id="carouselExampleAutoplaying" class="carousel slide d-flex w-75" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/snake/Snake_Hungry_logo.png" class="d-block w-100" alt="Snake_Hungry">
            </div>
            <div class="carousel-item">
                <img src="images/darkLegacy/DarkLegacyLogo.png" class="d-block w-100" alt="Dark_Legacy">
            </div>
            <div class="carousel-item">
                <img src="images/labFy/LabFyGize_logo.png" class="d-block w-100" alt="LabFy_Gize">
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

<section class="container d-lg-block">
    <div class="glide ">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php
                foreach ($dadosBanner2 as $dados2) {
                ?>
                    <li class="glide__slide card backtext"><a href="<?= $dados2->id_game ?>" class="text_azul"><img src="<?= $dados2->imagem ?>" class="card-img-top img_size2" alt="<?= $dados2->nome ?>">
                        <div class="card-body">
                            <p class="card-text fw-bold text-white m-0"><?= $dados2->nome ?></p>
                            <p class="text-white m-0">Gratuito para jogar</p>
                        </div>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="glide">
            <div class="glide__track" data-glide-el="track"></div>
        </div>
    </div>
</section>

<h1 class="h4 m-3">Recomendados e em destaque</h1>