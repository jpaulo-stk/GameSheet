<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$lanca[1] = array(
    "id_game" => 1,
    "nome" => "Dead Island 2",
    "descricao" => "Um vírus letal está se espalhando por Los Angeles e transformando os habitantes em zumbis. Descubra a verdade por trás do surto e sobre quem (ou o quê) você é depois de levar mordidas, se infectar e se tornar mais do que apenas imune. Sobreviva, evolua e cace zumbis como ninguém.",
    "images" => "images/lanca/DL2/banner.png",
    "card" => "images/outros_jogos/deadisland2.png",
    "jogar" => "https://store.steampowered.com/app/934700/Dead_Island_2/",
    "genero" => "Zumbis, Cooperativo, Terror",
    "dev" => "Estúdios Dambuster",
    "preco" => "149,50",
    "data" => "22/abr./2024"
);

$lanca[2] = array(
    "id_game" => 2,
    "nome" => "Hades II",
    "descricao" => "Transcenda o Submundo com feitiços das trevas para enfrentar o titã do tempo nesta sequência mágica do premiado roguelike de exploração de masmorras.",
    "images" => "images/lanca/H2/banner.png",
    "card" => "images/outros_jogos/hades2.png",
    "jogar" => "https://store.steampowered.com/app/1145350/Hades_II/",
    "genero" => "Ação, RPG, Roguelike, Mitologia",
    "dev" => "Supergiant Games",
    "preco" => "88,99",
    "data" => "6/mai./2024"
);

$lanca[3] = array(
    "id_game" => 3,
    "nome" => "V Rising",
    "descricao" => "Acorde como um vampiro após séculos de sono profundo. Evite o sol enquanto você vai atrás de sangue para recuperar sua força. Reconstrua seu castelo e converta humanos em seus servos leais durante a sua missão para criar um império vampiro. Trave uma guerra nesse mundo de conflitos.",
    "images" => "images/lanca/VR/banner.png",
    "card" => "images/outros_jogos/Vrising.png",
    "jogar" => "https://store.steampowered.com/app/1604030/V_Rising/",
    "genero" => "Sobrevivência, Mundo Aberto, Construção de Bases",
    "dev" => "Stunlock Studios",
    "preco" => "101,99",
    "data" => "8/mai./2024"
);

$lanca[4] = array(
    "id_game" => 4,
    "nome" => "TEKKEN 8",
    "descricao" => "Prepare-se para o próximo capítulo da lendária franquia de jogos de luta: TEKKEN 8.",
    "images" => "images/lanca/TK8/banner.png",
    "card" => "images/outros_jogos/tekken8.png",
    "jogar" => "https://store.steampowered.com/app/1778820/TEKKEN_8/",
    "genero" => "Luta, Ação, Luta 3D, Multijogador",
    "dev" => "Bandai Namco Studios Inc.",
    "preco" => "269,90",
    "data" => "25/jan./2024"
);

$lanca[5] = array(
    "id_game" => 5,
    "nome" => "Dragon Ball Sparking Zero",
    "descricao" => "DRAGON BALL: Sparking! ZERO pegou a jogabilidade lendária da série Budokai Tenkaichi e a elevou a novos níveis. Faça com que o poder destrutivo dos lutadores mais fortes de DRAGON BALL seja seu!",
    "images" => "images/lanca/DBSH/banner.png",
    "card" => "images/outros_jogos/dragon.png",
    "jogar" => "https://store.steampowered.com/app/1790600/DRAGON_BALL_Sparking_ZERO/",
    "genero" => "Mundo Aberto, Ação Multijogador, Crime, Tiro",
    "dev" => "Spike Chunsoft Co., Ltd.",
    "preco" => "282,50",
    "data" => "10/out./2024"
);

echo json_encode($lanca);
