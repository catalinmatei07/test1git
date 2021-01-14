<?php


echo " <b>12.Se consideră trei variabile a, b și c. Se cere să se interschimbe circular de la stânga la dreapta
valorile lor, apoi să se afișeze valorile astfel interschimbate. Exemplu: Dacă inițial a=3, b=16, c=4.2
atunci după o interschimbare vom avea a=4.2, b=3, c=16. </b> ","<br>", "<br>";
$a=3;
$b=16;
$c=4.2;
echo "inainte de schimbare","<br>";
echo "a=", $a,"<br>";
echo "b=", $b,"<br>";
echo "c=", $c,"<br>";
$d=$c;
$c=$b;
$b=$a;
$a=$d;
echo "dupa schimbare","<br>";
echo "a=", $a,"<br>";
echo "b=", $b,"<br>";
echo "c=", $c,"<br>";

?>