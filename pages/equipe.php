<h1 class="h3 fw-bold text-center m-4">Equipe</h1>
<h1 class="h5 fw-bold text-center m-4">Desenvolvedores dos jogos gratuitos</h1>


<section class="d-none d-md-none d-lg-block d-xl-block">
    <div class="justify-content-center d-flex row container-fluid ">
        <?php
        foreach ($dadosGames as $dados) {
        ?>
            <div class="card w-25 m-2 p-0 border-0 joao back_card_m text-white" data-aos="zoom-in">
                <img src="<?= $dados->fotoDev ?>" class="card-img-top" alt="<?= $dados->dev ?>">

                <div class="card-body">
                    <h5 class="card-title"><?= $dados->dev ?></h5>
                    <p class="card-text"><?= $dados->desc ?></p>
                    <a href="<?= $dados->siteDev ?>" class="btn game_back3 rounded-0 fw-bold text-white border-0" target="_blank">SITE</a>
                    <a href="game/<?= $dados->id_game ?>" class="btn game_back2 rounded-0 fw-bold text-white border-0" target="_blank">JOGO</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<section class="d-sm-none d-md-block d-lg-none d-xl-none">
    <div class="text-center d-flex justify-content-center row">
        <?php
        foreach ($dadosGames as $dados) {
        ?>
            <div class="card w-50 m-2 p-0 border-0 joao back_card_m text-white">
                <img src="<?= $dados->fotoDev ?>" class="card-img-top" alt="<?= $dados->dev ?>">

                <div class="card-body">
                    <h5 class="card-title"><?= $dados->dev ?></h5>
                    <p class="card-text"><?= $dados->desc ?></p>
                    <a href="<?= $dados->siteDev ?>" class="btn game_back3 rounded-0 fw-bold text-white border-0" target="_blank">SITE</a>
                    <a href="game/<?= $dados->id_game ?>" class="btn game_back2 rounded-0 fw-bold text-white border-0" target="_blank">JOGO</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<section class="d-none d-sm-block d-md-none d-lg-none d-xl-none">
    <div class="text-center d-flex justify-content-center row">
        <?php
        foreach ($dadosGames as $dados) {
        ?>
            <div class="card w-75 m-2 p-0 border-0 joao back_card_m text-white">
                <img src="<?= $dados->fotoDev ?>" class="card-img-top" alt="<?= $dados->dev ?>">

                <div class="card-body">
                    <h5 class="card-title"><?= $dados->dev ?></h5>
                    <p class="card-text"><?= $dados->desc ?></p>
                    <a href="<?= $dados->siteDev ?>" class="btn game_back3 rounded-0 fw-bold text-white border-0" target="_blank">SITE</a>
                    <a href="game/<?= $dados->id_game ?>" class="btn game_back2 rounded-0 fw-bold text-white border-0" target="_blank">JOGO</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>