<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$fotosRecomendados[1] = array(
    array("foto" => "images/recomendados/CS2/cs1.png"),
    array("foto" => "images/recomendados/CS2/cs2.png"),
    array("foto" => "images/recomendados/CS2/cs3.png"),
    array("foto" => "images/recomendados/CS2/cs4.png")
);

$fotosRecomendados[2] = array(
    array("foto" => "images/recomendados/DBD/dbd1.png"),
    array("foto" => "images/recomendados/DBD/dbd2.png"),
    array("foto" => "images/recomendados/DBD/dbd3.png"),
    array("foto" => "images/recomendados/DBD/dbd4.png")
);

$fotosRecomendados[3] = array(
    array("foto" => "images/recomendados/ER/ed1.png"),
    array("foto" => "images/recomendados/ER/ed2.png"),
    array("foto" => "images/recomendados/ER/ed3.png"),
    array("foto" => "images/recomendados/ER/ed4.png")
);

$fotosRecomendados[4] = array(
    array("foto" => "images/recomendados/FH5/fh1.png"),
    array("foto" => "images/recomendados/FH5/fh2.png"),
    array("foto" => "images/recomendados/FH5/fh3.png"),
    array("foto" => "images/recomendados/FH5/fh4.png")
);

$fotosRecomendados[5] = array(
    array("foto" => "images/recomendados/GTA/gta1.png"),
    array("foto" => "images/recomendados/GTA/gta2.png"),
    array("foto" => "images/recomendados/GTA/gta3.png"),
    array("foto" => "images/recomendados/GTA/gta4.png")
);


echo json_encode($fotosRecomendados);
