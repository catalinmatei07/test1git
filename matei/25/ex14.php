<?php

echo " <b>14.Se consideră trei numere a, b, c. Verifică dacă cele trei numere pot forma laturile unui triunghi. În
caz afirmativ calculează aria și perimetrul triunghiului si precizează tipul lui(echilateral, isoscel,
dreptunghic). </b> ";
echo "<b>Cunoscând laturile unui triunghi oarecare - a, b și c – să se scrie un script PHP care să calculeze și
să afișeze perimetrul și aria sa.</b> ", "<br>";
echo "<br>", "<br>";
$a=4;
$b=5;
$c=7;

$aria=0;
if($a+$b>$c && $b+$c>$a && $c+$a>$b)
{
    if($a == $b || $b == $c || $c == $a)
    {
        echo "triunghi isoscel", "<br>";
        $p=$a+$b+$c/2;
        $aria = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        echo "Aria: ", $aria, "<br>";
        echo "Perimetrul: ",$p*2;
    }
    elseif($a == $b && $b==$c)
    {
        echo "triunghi echilateral","<br>";
        $aria=$a*$a*sqrt(3)/4;
        echo "Aria:",$aria;
    }

    elseif($a == $b*2 || $b == $c*2 || $c == $a*2)
    {
        echo "triunghi dreptunghic", "<br>";
        $p=$a+$b+$c/2;
        $aria = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        echo "Aria: ", $aria, "<br>";
        echo "Perimetrul: ",$p*2;
    }
    else
    {
        echo "triunghi dreptunghic", "<br>";
        $p=$a+$b+$c/2;
        $aria = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        echo "Aria: ", $aria, "<br>";
        echo "Perimetrul: ",$p*2;
    }

}
else{
    echo "asa triunghi nu poate exista";
}
?>