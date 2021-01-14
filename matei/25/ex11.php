<?php

echo " <b>11.Scrieți un script PHP care să afișeze adevărat, dacă şi numai dacă două numere întregi memorate în variabilele x și y sunt consecutive și fals în caz contrar. </b> ","<br>", "<br>";

$x=2;
$y=4;

if(($x+1==$y) || ($y+1==$x))
{
    echo "true";
}
else{
    echo "false";
}

?>