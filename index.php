<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Sheet</title>

    <base href="http://localhost/gamesheet/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="js/glide/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="js/glide/node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    $url = "http://localhost/gamesheet/api/games.php";

    $dadosAPI = file_get_contents($url);

    $dadosGames = json_decode($dadosAPI);

    $url2 = "http://localhost/gamesheet/api/recomendados.php";

    $dadosAPI2 = file_get_contents($url2);

    $dadosRecomendados = json_decode($dadosAPI2);

    $url3 = "http://localhost/gamesheet/api/promo.php";

    $dadosAPI3 = file_get_contents($url3);

    $dadosPromo = json_decode($dadosAPI3);

    $url4 = "http://localhost/gamesheet/api/lanca.php";

    $dadosAPI4 = file_get_contents($url4);

    $dadosLanca = json_decode($dadosAPI4);
    ?>
    <header>
        <nav class="navbar navbar-expand-lg header_back" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/gamesheet/"><img src="images/Logo 1.svg" alt=""></a>
                <button class="navbar-toggler rounded-0 shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white header_text" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white header_text" href="equipe">Equipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white header_text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gratuitos
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($dadosGames as $dados) {
                                    echo "<li><a class='dropdown-item fw-bold' href='game/{$dados->id_game}'>{$dados->nome}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white header_text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Recomendados
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($dadosRecomendados as $dados2) {
                                    echo "<li><a class='dropdown-item fw-bold' href='recomendados/{$dados2->id_game}'>{$dados2->nome}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white header_text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Promoção
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($dadosPromo as $dados3) {
                                    echo "<li><a class='dropdown-item fw-bold' href='promo/{$dados3->id_game}'>{$dados3->nome}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white header_text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lançamentos
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($dadosLanca as $dados4) {
                                    echo "<li><a class='dropdown-item fw-bold' href='lanca/{$dados4->id_game}'>{$dados4->nome}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-0 header_text" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success btn-outline-light rounded-0" type="submit">Pesquisar</button>
                    </form>
                    <a class="text_azul ms-2" href="http://localhost/gamesheet/contato">
                        <button class="btn btn-outline-success btn-outline-light rounded-0 header_text" type="submit">Contato</button>
                    </a>
                </div>
            </div>

        </nav>
        <hr class="m-0 mb-2" style="border: 1px solid; ">
    </header>


    <main>
        <?php

        $pagina = "home";

        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";

            $pagina = explode("/", $pagina);

            $codigo = $pagina[1] ?? null;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
    </main>

    <hr class="m-0 mt-2" style="border: 1px solid; ">
    <footer>

        <section class="infos">
            <div>
                <h3>Redes Sociais</h3>
                <a href="mailto:joaopaulo_bazan@hotmail.com?subject=Duvidas"><i class="fa-solid fa-envelope"></i></a>

                <a href="https://wa.me/5544998030402"><i class="fa-solid fa-phone"></i></a>

                <a href="https://www.instagram.com/joaopaulo_bf_/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </section>

        <div class="creditos">
            <P>Desenvolvido por <br> João Paulo &copy;</P>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/glide/node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="js/fslightbox/node_modules/fslightbox/index.js"></script>
    <script src="https://kit.fontawesome.com/181ad36814.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        AOS.init();

        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });

        const config = {
            type: 'carousel',
            perView: 5,
            breakpoints: {
                992: {
                    perView: 4
                }
            }
        };

        new Glide('.glide', config).mount()
    </script>
</body>

</html>