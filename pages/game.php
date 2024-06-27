<?php
$dados = $dadosGames->$codigo;
?>

<?php
$dadosFotos = file_get_contents("https://gamesheet.000webhostapp.com/api/fotos.php");
$dadosFotos = json_decode($dadosFotos);

$dadosFotos = $dadosFotos->$codigo;
?>


<div>
    <section class="text-center">
        <div class="mb-1 p-3 pb-1 pt-0" data-aos="zoom-in">
            <img src="<?= $dados->images ?>" alt="Foto" class="game_img joao">
        </div>

        <div class="d-flex justify-content-center">

            <div class="row game_img space" data-aos="zoom-in">
                <?php
                $i = 1;
                foreach ($dadosFotos as $dados2) {
                ?>
                    <div class="d-flex col-12 col-md-3 p-2 pt-0">
                        <a href="<?= $dados2->foto ?>" title="Aumentar Foto" data-fslightbox><img src="<?= $dados2->foto ?>" alt="Foto" <?= $i ?> class="w-100 joao d-none d-lg-block"></a>
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
        </div>
    </section>

    <div class="jogar mt-1 d-none d-lg-block">

    </div>

    <div class="container div_text_containers" data-aos="fade-right">
        <h1 class="card-text fw-bold text-white"><?= $dados->nome ?></h1>
        <p><?= $dados->descricao ?></p>

    </div>

    <div class="jogar mt-1 d-none d-lg-block">
        <div class="joao back_card_m rounded-0" data-aos="flip-down">
            <div class="p-1">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="pe-4 fw-bold mt-3">Gratuito para jogar</p>
                    <div>
                        <button type="button" class="btn game_back rounded-0 border-0">
                            <a href="<?= $dados->jogar ?>" target="_blank" class="text_azul p-2 text-white fw-bold">Jogar</a>
                        </button>
                        <button type="button" class="btn game_back2 rounded-0 fw-bold text-white border-0" id="liveToastBtn">lista de desejos</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast joao rounded-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header back_card_m rounded-0">
                    <img src="<?= $dados->images ?>" class="rounded me-2 w-25" alt="imagem">
                    <strong class="me-auto text-white"><?= $dados->nome ?></strong>
                    <small class="text-white p-2">1 segundo atras</small>
                    <button type="button" class="btn-close btn-close-white mb-5 shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-black fw-bold">
                    <?= $dados->nome ?> foi adicionado a sua lista de desejos.
                </div>
            </div>
        </div>
    </div>
</div>

<p class="d-lg-none text-center fw-bold text-white">Jogo indisponivel para dipositivos moveis</p>

<div class="d-flex justify-content-center m-4" data-aos="zoom-in">
    <div class="card joao rounded-0 text-center" style="width: 18rem;">
        <div class="fw-bold p-2 text-white back_card_m">
            Detalhes
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-white back_card_m">Nome: <?= $dados->nome ?></li>
            <li class="list-group-item text-white back_card_m">Genero: <?= $dados->genero ?></li>
            <li class="list-group-item text-white back_card_m">Jogadores: Um jogador</li>
            <li class="list-group-item text-white back_card_m">Desenvolvedor: <?= $dados->dev ?></li>
            <li class="list-group-item text-white back_card_m">Data de lançamento: 2024</li>
        </ul>
    </div>
</div>