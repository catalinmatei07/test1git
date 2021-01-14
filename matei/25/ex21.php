<?php

echo " <b>21. Se consideră numărul natural n. Să se scrie un script PHP care calculează și afișează suma primelor
n numere impare. De exemplu dacă n=4, S=1+3+5+7=16 </b> ","<br>", "<br>";
$s=0;
for($i=1;$i<=4;$i++)
{
    $s=$s+((2*$i)-1);
}
echo $s;

?>