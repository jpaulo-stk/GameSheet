<?php
$url2 = "http://localhost/gamesheet/api/banners_game_free.php";

$dadosAPI2 = file_get_contents($url2);
$dadosBanner2 = json_decode($dadosAPI2);
?>

<h1 class="h3 fw-bold text-center m-4 mt-5">Jogos Gratuitos</h1>

<div class="container text-center d-flex justify-content-center">
    <div class="row g-3 col-9 d-flex justify-content-center">
            <?php
            foreach ($dadosBanner2 as $dados2) {
            ?>
            <div class="card_w">
                <div class="card border-0">
                    <a href="<?= $dados2->id_game?>" class="text_azul"><img src="<?= $dados2->imagem ?>" class="text_azul size_img2" alt="<?= $dados2->nome ?>">
                        <div class="card-body backtext p-2">
                            <p class="card-text fw-bold text-white m-0 size_p"><?= $dados2->nome ?></p>
                            <p class="text-white m-0">Gratuito para jogar</p>
                        </div>
                    </a>
                </div>
                </div>
            <?php
            }
            ?>
    </div>
</div>