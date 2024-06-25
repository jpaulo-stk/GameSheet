<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$promo[1] = array(
    "id_game" => 1,
    "nome" => "Assetto Corsa",
    "descricao" => "SIMULADOR DE CORRIDAS DE ÚLTIMA GERAÇÃO
Assetto Corsa possui um motor gráfico DirectX 11 avançado, que reproduz um ambiente imersivo, iluminação dinâmica e materiais e superfícies realistas. O sistema de física avançado é projetado para gerar uma experiência de direção bastante realista, incluindo funções e aspectos de carros reais, nunca antes vistos em outros simuladores de corridas. Isso inclui bandas de rodagem, ciclos de resfriamento, degradação e vesiculação, simulação aerodinâmica altamente avançada, com partes móveis acionáveis em tempo real por canais de telemetria, sistemas híbridos de recuperação cinética e simulação de recuperação de energia. Extremamente detalhado, com opções para um ou diversos jogadores, carros licenciados exclusivos reproduzidos com a maior exatidão possível, graças à cooperação oficial com produtoras de veículos reais.",
    "images" => "images/promo/AC/banner.png",
    "card" => "images/outros_jogos/asseto.png",
    "jogar" => "https://store.steampowered.com/app/244210/Assetto_Corsa/",
    "genero" => "Corrida, Simulador Automobilístico, Simulação",
    "dev" => "Kunos Simulazioni",
    "preco" => "5,99",
    "data" => "19/dez./2014"
);

$promo[2] = array(
    "id_game" => 2,
    "nome" => "Avatar Frontiers Pandora",
    "descricao" => "Avatar: Frontiers of Pandora™ é um jogo de ação e aventura em primeira pessoa ambientado na Fronteira Ocidental. Raptado pela RDA, você, um Na'vi, foi moldado para servir ao propósito deles. Quinze anos depois, você está livre, mas se torna um estranho em sua terra natal. Reconecte-se com sua herança perdida e descubra o que realmente significa ser Na'vi ao se juntar a outros clãs para proteger Pandora.",
    "images" => "images/promo/AVA/banner.png",
    "card" => "images/outros_jogos/avatar.png",
    "jogar" => "https://store.steampowered.com/app/2840770/Avatar_Frontiers_of_Pandora/",
    "genero" => "Ação, Aventura, Tiro, Exploração, 3D",
    "dev" => "Massive Entertainment.",
    "preco" => "179,99",
    "data" => "17/jun./2024"
);

$promo[3] = array(
    "id_game" => 3,
    "nome" => "Back 4 Blood",
    "descricao" => "Back 4 Blood é um jogo de tiro em primeira pessoa dos criadores da franquia aclamada pela crítica Left 4 Dead. Você está no centro de uma guerra contra os contagiados. Esses humanos portadores de um parasita mortal se transformaram em criaturas assustadoras inclinadas a devorar os restos da civilização. Com a extinção da humanidade em jogo, cabe a você e seus amigos enfrentar esse inimigo, erradicar os corrompidos e reconquistar o mundo.",
    "images" => "images/promo/B4B/banner.png",
    "card" => "images/outros_jogos/b4b.png",
    "jogar" => "https://store.steampowered.com/app/924970/Back_4_Blood/",
    "genero" => "Zumbis, Cooperativo, On-line, Multijogador, Tiro",
    "dev" => "Turtle Rock Studios",
    "preco" => "279,99",
    "data" => "12/out./2021"
);

$promo[4] = array(
    "id_game" => 4,
    "nome" => "Forza Horizon 5",
    "descricao" => "Sua maior aventura Horizon te espera! Lidere impressionantes expedições pelo mundo aberto vibrante e em constante evolução nas terras mexicanas. Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo.",
    "images" => "images/promo/FH5/banner.png",
    "card" => "images/outros_jogos/forza.png",
    "jogar" => "https://store.steampowered.com/app/1551360/Forza_Horizon_5/",
    "genero" => "Corrida, Mundo Aberto, Direção, Multijogador",
    "dev" => "Playground Games",
    "preco" => "249,00",
    "data" => "9/nov./2021"
);

$promo[5] = array(
    "id_game" => 5,
    "nome" => "Dying Light",
    "descricao" => "Dos mesmos criadores dos sucessos Dead Island e Call of Juarez. Vencedor e nomeado a mais de 50 prêmios da indústria. O jogo cuja jogabilidade implacável estabeleceu novos padrões para os jogos em primeira pessoa. Graças ao seu legado e aos sete anos de suporte pós-lançamento, ele entra para a história como um dos maiores jogos de zumbis.",
    "images" => "images/promo/DL/banner.png",
    "card" => "images/outros_jogos/dying.png",
    "jogar" => "https://store.steampowered.com/app/239140/Dying_Light/",
    "genero" => "Zumbis, Terror de Sobrevivência, Terror, Parkour",
    "dev" => "Techland",
    "preco" => "22,49",
    "data" => "26/jan./2015"
);

echo json_encode($promo);
