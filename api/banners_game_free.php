<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $banners[1] = array("nome" => "Snake Hungry", "imagem" => "images/snake/snake_logo1.png", "id_game" =>1);
    $banners[2] = array("nome" => "labFy Gize", "imagem" => "images/labFy/logo_laby2.png", "id_game" =>2);
    $banners[3] = array("nome" => "Dark Legacy", "imagem" => "images/darkLegacy/Dark_Legacy_Logo.png", "id_game" =>3);
    $banners[4] = array("nome" => "Galactic Attack", "imagem" => "images/galaxyAttack/logo.png", "id_game" =>3);
    $banners[5] = array("nome" => "The Last Word", "imagem" => "images/TLW/logoTLW.png", "id_game" =>3);



    echo json_encode($banners);