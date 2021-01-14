<?php

function factimp($n){
    $raspuns=0;
    for($i=1;$i<=$n*2;$i++){
       if($i%2==1){
        $raspuns=fact($i)+$raspuns;
       }
    }
    return $raspuns;
}

function fact($n){
    $raspuns=1;
    for($i=1;$i<=$n;$i++){
        $raspuns=$i*$raspuns;
    }
    return $raspuns;
}


$n=5;
$k=6;
$permutari=factimp($n);
echo $permutari;


?>