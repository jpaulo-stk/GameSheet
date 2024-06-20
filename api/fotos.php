<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$fotos[1] = array(
    "id_game" => 1,
    "nome" => "SnakeHungry",
    "imagem" => "images/snake/snake_img1.jpg"
);


echo json_encode($banners);
