<?php
$dados = $dadosGames->$codigo;
?>

<?php
$dadosFotos = file_get_contents("http://localhost/gamesheet/api/fotos.php");
$dadosFotos = json_decode($dadosFotos);

$dadosFotos = $dadosFotos->$codigo;
?>



<section class="text-center">
    <img src="<?= $dados->images ?>" alt="Foto" class="w-50 p-2">


    <div class="d-flex justify-content-center">
        <div class="row w-50 space">
            <?php
            $i = 1;
            foreach ($dadosFotos as $dados) {
            ?>
                <div class="d-flex col-12 col-md-3 p-2">
                    <a href="<?= $dados->foto ?>" title="Aumentar Foto" data-fslightbox><img src="<?= $dados->foto ?>" alt="Foto" <?= $i ?> class="w-100"></a>
                </div>
            <?php
                $i++;
            }
            ?>
        </div>
    </div>
</section>



