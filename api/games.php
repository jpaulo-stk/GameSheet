<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1] = array(
    "id" => 1,
    "nome" => "Snake Hungry",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "images" => "images/snake_img1.jpg",
    "images2" => "images/snake_logo1.jpg"
);

$jogo[2] = array(
    "id" => 2,
    "nome" => "LabFy Gize",
    "descricao" => "Um jogo de caça ao tesouro, onde o jogador precisa encontrar alguns amuletos para conseguir chegar até o tesouro. Jony um desbravador que estava em uma expedição pelo Egito, em busca do tesouro de Necrópole de Saqqura escondido em um outro mundo que existe abaixo das pirâmides de Gize, quando acaba preso em um labirinto de com objetos mortais que dificultam sua caça ao tesouro.Jonny terá que passar por dois níveis até chegar ao tesouro, deve pegar os diamantes para complementar sua fortuna",
    "images" => "images/LabFy_Gize_img1.jpg",
    "images2" => "images/LabFy_Gize_img2.jpg"
);

$jogo[3] = array(
    "id" => 3,
    "nome" => "Dark Legacy",
    "descricao" => "Há séculos, um poderoso necromante, conhecido como a Lord Mhaldazzar, governava a região de Valáquia com punho de ferro. No entanto, um grupo de caçadores destemidos liderados pelo lendário Richard Valencourt, conseguiram derrotá-lo e selá-lo em um sono eterno. Por décadas, a região viveu em paz, mas recentemente, rumores de que o selo que mantinha o necromante adormecido estava enfraquecendo e começou a se romper. Em meio ao caos, criaturas das trevas emergiram dos locais mais sombrios da terra, ameaçando mergulhar o mundo na escuridão novamente. O jogador assume o papel de Wuthir Valencourt, um descendente distante de Richard, que herdou a habilidade e a coragem de seus antepassados. Conforme as trevas se espalham pela Valáquia, Wuthir é convocado para enfrentar o mal que se ergue mais uma vez. A jogabilidade mistura elementos de aventura, plataformas e hack and slash, enquanto Wuthir viaja por vastos castelos góticos, florestas sombrias e cidades abandonadas, enfrentando hordas de criaturas demoníacas. Colete relíquias para ajudá-lo em sua jornada e desafie o Necromante.",
    "images" => "images/DarkLegacy_img1",
    "images2" => "images/DarkLegacy_img2",
    "images3" => "images/DarkLegacy_img3"
);

echo json_encode($jogo);
