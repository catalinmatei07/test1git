<?php
$strings= "aurul alb";
$v1=0;
$v2=0;

$C1="a";
$C2="u";

$v1=substr_count($strings,$C1,0,strlen($strings));
$v2=substr_count($strings,$C2,0,strlen($strings));

if($v1==$v2){
    echo "da";
}
else {
    echo "nu";
}


?>