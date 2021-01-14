<?php

echo " <b>13.Realizați un program care calculează suma primelor n numere naturale pare s=2+4+…+2n.
Exemplu: pentru n=4 rezultă s=2+4+6+8=20. </b> ","<br>", "<br>";
$s=0;
for($i=1;$i<=4;$i++)
{
    $s=$s+(2*$i);
}
echo $s;

?>