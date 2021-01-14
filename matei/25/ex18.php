<?php

echo " <b>18. Cunoscând laturile unui dreptunghi – a și b – să se scrie un script PHP care să calculeze și să
afișeze perimetrul, aria și lungimea diagonalei.   </b> ","<br>", "<br>";


$a=4;
$b=6;
$aria=$a*$b;
echo "aria: ", $aria , " <br>";
$perimetrul = 2*($a+$b);
echo "perimetrul:", $perimetrul,"<br>";
$diag=sqrt(($a*$a)+($b*$b));
$diag = number_format($diag,2);
echo "diagonala:", $diag,"<br>";

?>