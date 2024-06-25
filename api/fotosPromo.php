<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$fotosPromo[1] = array(
    array("foto" => "images/promo/AC/ac1.png"),
    array("foto" => "images/promo/AC/ac2.png"),
    array("foto" => "images/promo/AC/ac3.png"),
    array("foto" => "images/promo/AC/ac4.png")
);

$fotosPromo[2] = array(
    array("foto" => "images/promo/AVA/ava1.png"),
    array("foto" => "images/promo/AVA/ava2.png"),
    array("foto" => "images/promo/AVA/ava3.png"),
    array("foto" => "images/promo/AVA/ava4.png")
);

$fotosPromo[3] = array(
    array("foto" => "images/promo/B4B/b4b1.png"),
    array("foto" => "images/promo/B4B/b4b2.png"),
    array("foto" => "images/promo/B4B/b4b3.png"),
    array("foto" => "images/promo/B4B/b4b4.png")
);

$fotosPromo[4] = array(
    array("foto" => "images/promo/FH5/fh1.png"),
    array("foto" => "images/promo/FH5/fh2.png"),
    array("foto" => "images/promo/FH5/fh3.png"),
    array("foto" => "images/promo/FH5/fh4.png")
);

$fotosPromo[5] = array(
    array("foto" => "images/promo/DL/dl1.png"),
    array("foto" => "images/promo/DL/dl2.png"),
    array("foto" => "images/promo/DL/dl3.png"),
    array("foto" => "images/promo/DL/dl4.png")
);


echo json_encode($fotosPromo);
