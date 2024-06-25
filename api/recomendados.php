<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$recomendados[1] = array(
    "id_game" => 1,
    "nome" => "Counter-Strike 2",
    "descricao" => "Há mais de duas décadas, o Counter-Strike oferece uma experiência competitiva de elite moldada por milhões de jogadores mundialmente. Agora, o próximo capítulo da história do CS vai começar. Isso é Counter-Strike 2.",
    "images" => "images/recomendados/CS2/banner.png",
    "card" => "images/outros_jogos/csgo.png",
    "jogar" => "https://store.steampowered.com/app/730/CounterStrike_2/",
    "genero" => "FPS, Tiro, Multijogador",
    "dev" => "Valve",
    "preco" => "76,49",
    "data" => "21/ago./2012"
);

$recomendados[2] = array(
    "id_game" => 2,
    "nome" => "Dead by Daylight",
    "descricao" => "Dead by Daylight é um jogo de horror multijogadores (4x1) em que um dos jogadores assume o papel do Assassino enquanto os outros quatro jogam como Sobreviventes, tentando fugir do Assassino para não serem pegos, torturados e assassinados.",
    "images" => "images/recomendados/DBD/banner.png",
    "card" => "images/outros_jogos/dbd.png",
    "jogar" => "https://store.steampowered.com/app/381210/Dead_by_Daylight/",
    "genero" => "Terror, Terror de sobrevivência, Multijogador",
    "dev" => "Behaviour Interactive Inc.",
    "preco" => "59,97",
    "data" => "14/jun./2016"
);

$recomendados[3] = array(
    "id_game" => 3,
    "nome" => "ELDEN RING",
    "descricao" => "O NOVO RPG DE AÇÃO E FANTASIA.
                    Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.",
    "images" => "images/recomendados/ER/banner.png",
    "card" => "images/outros_jogos/eldenring.png",
    "jogar" => "https://store.steampowered.com/app/1245620/ELDEN_RING/",
    "genero" => "RPG, SoulsLike, Fantasia Sombria, Mundo Aberto",
    "dev" => "FromSoftware Inc.",
    "preco" => "229,90",
    "data" => "24/fev./2022"
);

$recomendados[4] = array(
    "id_game" => 4,
    "nome" => "Forza Horizon 5",
    "descricao" => "Sua maior aventura Horizon te espera! Lidere impressionantes expedições pelo mundo aberto vibrante e em constante evolução nas terras mexicanas. Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo.",
    "images" => "images/recomendados/FH5/banner.png",
    "card" => "images/outros_jogos/forza.png",
    "jogar" => "https://store.steampowered.com/app/1551360/Forza_Horizon_5/",
    "genero" => "Corrida, Mundo Aberto, Direção, Multijogador",
    "dev" => "Playground Games",
    "preco" => "249,00",
    "data" => "9/nov./2021"
);

$recomendados[5] = array(
    "id_game" => 5,
    "nome" => "Grand Theft Auto V",
    "descricao" => "Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo dos EUA e a indústria do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro.",
    "images" => "images/recomendados/GTA/banner.png",
    "card" => "images/outros_jogos/gta.png",
    "jogar" => "http://localhost/gamesheet/games/GalacticAttack/",
    "genero" => "Mundo Aberto, Ação Multijogador, Crime, Tiro",
    "dev" => "Rockstar Games",
    "preco" => "82,41",
    "data" => "14/abr./2015"
);

echo json_encode($recomendados);
