<?php

function fact($n){
    $raspuns=1;
    for($i=1;$i<=$n;$i++){
        $raspuns=$i*$raspuns;
    }
    return $raspuns;
}

function aranj($n,$k){
    $nk=$n-$k;
    $raspuns=fact($n)/fact($nk);
    return $raspuns;
}

function comb($n,$k){
    $nk=$n-$k;
    
    $raspuns=fact($n)/(fact($nk)*fact($k));
    return $raspuns;
}


$n=10;
$k=3;
$permutari=fact($n);
echo $permutari;
echo "<br>";
$aranjamete=aranj($n,$k);
echo $aranjamete;
echo "<br>";
$combinari=comb($n,$k);
echo $combinari;

?>