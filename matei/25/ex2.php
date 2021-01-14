<?php
$a=9;
$b=5;
$c=6;

echo " <b>2. Sunt date trei numere a, b, c. De afișat numerele în ordine crescătoare(descrescătoare).</b> ","<br>";

if(($a>$b) && ($a>$c)){
        if($b>$c){
            echo "descrescator ". $a. $b. $c;
            echo "<br>";
            echo "crescator ".$c. $b. $a; 
        }
        else{
            echo "descrescator ".$a. $c. $b; 
            echo "<br>";
            echo "crescator ".$b. $c. $a; 
        }
}
if(($b>$a) && ($b>$c)){
    if($a>$c){
        echo "descrescator ".$b.  $a. $c;
        echo "<br>";
        echo "crescator ".$c. $a. $b; 
    }
    else{
        echo "descrescator ".$b.  $c. $a; 
        echo "<br>";
        echo "crescator ".$a. $c. $b; 
    }
}
if(($c>$a) && ($c>$b)){
    if($a>$b){
        echo "descrescator ".$c.  $a. $b;
        echo "<br>";
        echo "crescator ".$b. $a. $c; 
    }
    else{
        echo "descrescator ".$c.  $b. $a; 
        echo "<br>";
        echo "crescator ".$a. $b. $c; 
    }
}

?>