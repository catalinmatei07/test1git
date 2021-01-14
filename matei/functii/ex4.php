
<?php

function maxx($x,$y){
    $raspuns=1;
if($x>$y){
    return $x;
}
else{
    return $y;
}
}



function maxplus($array){
    $array=explode(",",$array);
    return max($array);
}


$x=8;
$y=6;
$maxim=maxx($x,$y);
echo "maximul dintre ele este ", $maxim;


$array = $_GET["array"];
$maximplus=maxplus($array);
echo "maximul dintre ele este ", $maximplus;    

?>