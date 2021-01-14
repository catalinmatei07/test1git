<?php
$a=9;
$b=5;
$c=6;
echo " <b>1. Să se afle minimum și maximum din trei numere date a, b, c,cu ajutorul instrucțiunii if, else.</b> ","<br>";

if(($a>$b) && ($a>$c)){
        echo "valoarea a: ",$a ," este cea mai mare";
}
if(($b>$a)&&($b>$c)){
        echo "valoarea b: ",$b ,"  este cea mai mare";
}
if(($c>$b)&&($c>$a)){
        echo "valoarea c: ",$c ,"  este cea mai mare";
}
?>