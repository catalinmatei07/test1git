<?php

function media($n){
    $raspuns=1;
for($i=1;$i<=$n;$i++)
{
    $raspuns=$raspuns*$i;
}
    return $raspuns/$n;
}


$n=8;
$media=media($n);
echo $media;


?>
