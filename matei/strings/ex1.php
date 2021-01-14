<?php
$strings= "Ionel are 10 lei noi";
$a=0;
$e=0;
$i=0;
$o=0;
$u=0;
$v1=0;
$v2=0;
$v3=0;
$v4=0;
$v5=0;
$v6=0;
$v7=0;
$v8=0;
$v9=0;
$v0=0;


$a=substr_count($strings,"a",0,strlen($strings));
$e=substr_count($strings,"e",0,strlen($strings));
$i=substr_count($strings,"i",0,strlen($strings));
$o=substr_count($strings,"o",0,strlen($strings));
$u=substr_count($strings,"u",0,strlen($strings));
$sumaVocale=$a+$e+$i+$o+$u;



$v1=substr_count($strings,"1",0,strlen($strings));
$v2=substr_count($strings,"2",0,strlen($strings));
$v3=substr_count($strings,"3",0,strlen($strings));
$v4=substr_count($strings,"4",0,strlen($strings));
$v5=substr_count($strings,"5",0,strlen($strings));
$v6=substr_count($strings,"6",0,strlen($strings));
$v7=substr_count($strings,"7",0,strlen($strings));
$v8=substr_count($strings,"8",0,strlen($strings));
$v9=substr_count($strings,"9",0,strlen($strings));
$v0=substr_count($strings,"10",0,strlen($strings));
$sumaNumere=$v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v0;


echo "raportul vocalelor la numarul de cifre este ", $sumaVocale/$sumaNumere;
?>