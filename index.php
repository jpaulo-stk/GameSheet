<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Sheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="js/glide/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="js/glide/node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    $url = "http://localhost/gamesheet/api/games.php";

    $dadosAPI = file_get_contents($url);

    $dadosJogos = json_decode($dadosAPI)
    ?>

    <header>
        <nav class="navbar navbar-expand-lg header_back" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/Logo 1.svg" alt=""></a>
                <button class="navbar-toggler rounded-0 shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white header_text" aria-current="page" href="index.php?pages=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white header_text" href="equipe">Equipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white header_text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Games
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item header_text" href="jogosPage">Jogos Gratuitos</a></li>
                                <li><a class="dropdown-item header_text" href="#1">Destaques</a></li>
                                <li><a class="dropdown-item header_text" href="#2">Promoções</a></li>
                                <li><a class="dropdown-item header_text" href="#3">Lançamentos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-0 header_text" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success btn-outline-light rounded-0 header_text" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php
        //imprimir o conteudo do array do GET
        //print_r($_GET);
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
    
            $p = explode("/", $param);
        }
    
        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? null;
    
        if ($page == "jogos") {
            $pagina = "jogos/{$jogo}.php";
        } else {
            $pagina = "pages/{$page}.php";
        }
    
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/glide/node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="js/fslightbox/node_modules/fslightbox/index.js"></script>


    <script>
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


    <script src="https://kit.fontawesome.com/181ad36814.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>