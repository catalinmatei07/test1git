<?php
$x=array(1,2,3,4,5,6,7,8,9,10);
$y=array(1,2,3,4,5,6,7,8,8,10);
$string = implode("", $x);
$string2 = implode("", $y);


if (strpos($string2, $string) !== false) {
    echo "Primul vector se contine in al doilea vector <br><br>";
} else {
    echo "Primul vector nu se contine in al doilea vector <br><br>";}
?>  