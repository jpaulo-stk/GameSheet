<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$categorias[1] = array(
    "id" => "jogosGratuitos",
    "nome" => "Jogos Gratuitos",
);

$categorias[2] = array(
    "id" => "Destaques",
    "nome" => "Destaques",
);

$categorias[3] = array(
    "id" => "Promoçoes",
    "nome" => "Promoçoes",
);

$categorias[4] = array(
    "id" => "lançamentos",
    "nome" => "lançamentos",
);

echo json_encode($categorias);
