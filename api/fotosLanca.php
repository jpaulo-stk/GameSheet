<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$fotoslanca[1] = array(
    array("foto" => "images/lanca/DL2/DL1.png"),
    array("foto" => "images/lanca/DL2/DL2.png"),
    array("foto" => "images/lanca/DL2/DL3.png"),
    array("foto" => "images/lanca/DL2/DL4.png")
);

$fotoslanca[2] = array(
    array("foto" => "images/lanca/H2/H1.png"),
    array("foto" => "images/lanca/H2/H2.png"),
    array("foto" => "images/lanca/H2/H3.png"),
    array("foto" => "images/lanca/H2/H4.png")
);

$fotoslanca[3] = array(
    array("foto" => "images/lanca/VR/VR1.png"),
    array("foto" => "images/lanca/VR/VR2.png"),
    array("foto" => "images/lanca/VR/VR3.png"),
    array("foto" => "images/lanca/VR/VR4.png")
);

$fotoslanca[4] = array(
    array("foto" => "images/lanca/TK8/TK1.png"),
    array("foto" => "images/lanca/TK8/TK2.png"),
    array("foto" => "images/lanca/TK8/TK3.png"),
    array("foto" => "images/lanca/TK8/TK4.png")
);

$fotoslanca[5] = array(
    array("foto" => "images/lanca/DBSH/dbs1.png"),
    array("foto" => "images/lanca/DBSH/dbs2.png"),
    array("foto" => "images/lanca/DBSH/dbs3.png"),
    array("foto" => "images/lanca/DBSH/dbs4.png")
);


echo json_encode($fotoslanca);
