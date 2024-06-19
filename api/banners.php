<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $banners[1] = array("nome" => "SnakeHungry", "imagem" => "images/snake/snake_img1.jpg", "id_game" =>1);
    $banners[2] = array("nome" => "labFyGize", "imagem" => "images/labFy/labFy_Gize_img1.jpg", "id_game" =>2);
    $banners[3] = array("nome" => "DarkLegacy", "imagem" => "images/darkLegacy/DarkLegacy_img1.jpg", "id_game" =>3);

    echo json_encode($banners);