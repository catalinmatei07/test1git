<?php

echo " <b>16.Scrieți un script PHP care calculează și afișează media aritmetică a numerelor negative impare mai
mari ca: -n.  </b> ","<br>", "<br>";

$n=-15;

$n1=abs($n);
$contor=0;
$medie=0;
for($i=0;$i<$n1;$i++)
{
    if($i%2==1){
        $contor++;
        $medie=$medie+$i;
    }
}

$raspuns = $medie / $contor;
echo $raspuns-$raspuns-$raspuns;
?>