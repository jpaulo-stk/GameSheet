<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$url = "http://localhost/gamesheet/api/games.php";



$banners[1] = array("nome" => "Snake Hungry", "imagem" => "images/snake/snake_logo1.png", "id_game" => 1, "link" => "");
$banners[2] = array("nome" => "labFy Gize", "imagem" => "images/labFy/logo_laby2.png", "id_game" => 2, "link" => "pageGames");
$banners[3] = array("nome" => "Dark Legacy", "imagem" => "images/darkLegacy/Dark_Legacy_Logo.png", "id_game" => 4, "link" => "pageGames");
$banners[4] = array("nome" => "Galactic Attack", "imagem" => "images/galaxyAttack/logo.png", "id_game" => 5, "link" => "pageGames");
$banners[5] = array("nome" => "The Last Word", "imagem" => "images/TLW/logoTLW.png", "id_game" => 6, "link" => "pageGames");

echo json_encode($banners);
