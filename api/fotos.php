<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$fotos[1] = array(
    array("foto" => "images/fotosAPI/snake1.png"),
    array("foto" => "images/fotosAPI/snake2.png"),
    array("foto" => "images/fotosAPI/snake3.png"),
    array("foto" => "images/fotosAPI/snake4.png")
);

$fotos[2] = array(
    array("foto" => "images/fotosAPI/labFy1.png"),
    array("foto" => "images/fotosAPI/labFy2.png"),
    array("foto" => "images/fotosAPI/labFy3.png"),
    array("foto" => "images/fotosAPI/labFy4.png")
);

$fotos[3] = array(
    array("foto" => "images/fotosAPI/darkLegacy1.png"),
    array("foto" => "images/fotosAPI/darkLegacy2.png"),
    array("foto" => "images/fotosAPI/darkLegacy3.png"),
    array("foto" => "images/fotosAPI/darkLegacy4.png")
);

$fotos[4] = array(
    array("foto" => "images/fotosAPI/lastWord1.png"),
    array("foto" => "images/fotosAPI/lastWord2.png"),
    array("foto" => "images/fotosAPI/lastWord3.png"),
    array("foto" => "images/fotosAPI/lastWord4.png")
);

$fotos[5] = array(
    array("foto" => "images/fotosAPI/galaxy1.png"),
    array("foto" => "images/fotosAPI/galaxy2.png"),
    array("foto" => "images/fotosAPI/galaxy3.png"),
    array("foto" => "images/fotosAPI/galaxy4.png")
);

$fotos[6] = array(
    array("foto" => "images/fotosAPI/arteDoCu1.png"),
    array("foto" => "images/fotosAPI/arteDoCu2.png"),
    array("foto" => "images/fotosAPI/arteDoCu3.png"),
    array("foto" => "images/fotosAPI/arteDoCu4.png")
);



echo json_encode($fotos);
