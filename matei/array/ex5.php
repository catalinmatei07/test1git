<?php
$a=array();

$n=9;
for($i=0;$i<$n;$i++)
{$a[$i]= rand(1, 6);}



for($j=1;$j<=6;$j++){
    $counter=0;
    for($i=0;$i<$n;$i++){
        if($a[$i]==$j){
            $counter++;
        }
     
    }
    if($counter == 0){
        echo "numarul ", $j, " nu a aparut deloc", "<br>";
    }
    else if($counter == 1){
        echo "numarul ", $j, " a aparut o singura data", "<br>";
    }
    else{
        echo "numarul ",$j, " a aparut de ", $counter , " ori", "<br>";
    }
}


?>