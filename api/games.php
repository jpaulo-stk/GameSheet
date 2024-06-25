<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1] = array(
    "id_game" => 1,
    "nome" => "Snake Hungry",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "images" => "images/snake/snake1.png",
    "card" => "images/snake/snake_logo1.png",
    "jogar" => "http://localhost/gamesheet/games/Snake/",
    "genero" => "Plataforma",
    "dev" => "João Paulo B. Forastiere",
    "fotoDev" => "images/EQUIPE/jp.png",
    "siteDev" => "https://jpaulo-stk.github.io/Snake-Hungry/",
    "desc" => "Desenvolveu o site e jogo Snake Hungry"
);

$jogo[2] = array(
    "id_game" => 2,
    "nome" => "LabFy Gize",
    "descricao" => "Um jogo de caça ao tesouro, onde o jogador precisa encontrar alguns amuletos para conseguir chegar até o tesouro. Jony um desbravador que estava em uma expedição pelo Egito, em busca do tesouro de Necrópole de Saqqura escondido em um outro mundo que existe abaixo das pirâmides de Gize, quando acaba preso em um labirinto de com objetos mortais que dificultam sua caça ao tesouro.Jonny terá que passar por dois níveis até chegar ao tesouro, deve pegar os diamantes para complementar sua fortuna",
    "images" => "images/labFy/labFy3.png",
    "card" => "images/labFy/logo_laby2.png",
    "jogar" => "http://localhost/gamesheet/games/LabFyGize/",
    "genero" => "Plataforma",
    "dev" => "Emilly Crisallys",
    "fotoDev" => "images/EQUIPE/emily.png",
    "siteDev" => "https://peaceful-cobbler-6780e6.netlify.app/",
    "desc" => "Desenvolveu o site e jogo LabFy Gize"
);

$jogo[3] = array(
    "id_game" => 3,
    "nome" => "Dark Legacy",
    "descricao" => "Há séculos, um poderoso necromante, conhecido como a Lord Mhaldazzar, governava a região de Valáquia com punho de ferro. No entanto, um grupo de caçadores destemidos liderados pelo lendário Richard Valencourt, conseguiram derrotá-lo e selá-lo em um sono eterno. Por décadas, a região viveu em paz, mas recentemente, rumores de que o selo que mantinha o necromante adormecido estava enfraquecendo e começou a se romper. Em meio ao caos, criaturas das trevas emergiram dos locais mais sombrios da terra, ameaçando mergulhar o mundo na escuridão novamente. O jogador assume o papel de Wuthir Valencourt, um descendente distante de Richard, que herdou a habilidade e a coragem de seus antepassados. Conforme as trevas se espalham pela Valáquia, Wuthir é convocado para enfrentar o mal que se ergue mais uma vez. A jogabilidade mistura elementos de aventura, plataformas e hack and slash, enquanto Wuthir viaja por vastos castelos góticos, florestas sombrias e cidades abandonadas, enfrentando hordas de criaturas demoníacas. Colete relíquias para ajudá-lo em sua jornada e desafie o Necromante.",
    "images" => "images/darkLegacy/darkLegacy4.png",
    "card" => "images/darkLegacy/Dark_Legacy_Logo.png",
    "jogar" => "http://localhost/gamesheet/games/DarkLegacy-main/",
    "genero" => "Plataforma",
    "dev" => "Lieslei A. Navaro",
    "fotoDev" => "images/EQUIPE/lieslei.png",
    "siteDev" => "https://projeto-jogo-blush.vercel.app/index.html",
    "desc" => "Desenvolveu o site e jogo Dark Legacy"
);

$jogo[4] = array(
    "id_game" => 4,
    "nome" => "The Last Words",
    "descricao" => "Embarque em uma jornada assustadora através de um mundo 2D repleto de perigos e mistérios. Inspirado pelos grandes clássicos de survival horror como Resident Evil e The Last of Us, este jogo desenvolvido pelo PixelPulse Studios traz uma experiência única de terror e suspense. Encare desafios intensos, explore ambientes sombrios e descubra segredos macabros enquanto luta pela sobrevivência neste jogo emocionante.",
    "images" => "images/TLW/lastWord4.png",
    "card" => "images/TLW/logoTLW.png",
    "jogar" => "http://localhost/gamesheet/games/TLW/",
    "genero" => "Plataforma",
    "dev" => "Vinicius Ferreira",
    "fotoDev" => "images/EQUIPE/vini.png",
    "siteDev" => "https://viniciius.000webhostapp.com/",
    "desc" => "Desenvolveu o site e jogo The Last Words"
);

$jogo[5] = array(
    "id_game" => 5,
    "nome" => "Galactic Attack",
    "descricao" => "A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.",
    "images" => "images/galaxyAttack/LogoXX.jpg",
    "card" => "images/galaxyAttack/logo.png",
    "jogar" => "http://localhost/gamesheet/games/GalacticAttack/",
    "genero" => "Space combat",
    "dev" => "Milena Santos de Oliveira",
    "fotoDev" => "images/EQUIPE/milena.png",
    "siteDev" => "https://galactic-attack.vercel.app/",
    "desc" => "Desenvolveu o site e jogo Galactic Attack"
);

$jogo[6] = array(
    "id_game" => 6,
    "nome" => "Arte da Ocultação",
    "descricao" => "você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado",
    "images" => "images/arteDaOcu/logoimg.png",
    "card" => "images/arteDaOcu/logo_miniatura.png",
    "jogar" => "http://localhost/gamesheet/games/jogothiago/",
    "genero" => "Plataforma",
    "dev" => "Thiago Borges Fernandes",
    "fotoDev" => "images/EQUIPE/thiago.png",
    "siteDev" => "https://gamers-paradisers.000webhostapp.com/",
    "desc" => "Desenvolveu o "
);

echo json_encode($jogo);
