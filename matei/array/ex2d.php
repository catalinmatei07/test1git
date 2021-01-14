<?php
$x=array(2,6,1,7,3,6,8,3,3,1);
$y=array(4,6,2,7,5,3,7,8,4,5);
$counter=0;
for($i=0;$i<count($x);$i++){
    for($j=0;$j<count($y);$j++){
        if($x[$i]==$y[$j]){
            $counter++;
        }
    }
   
    echo "elementul ", $x[$i], " apare de ", $counter, " ori", "<br>";
    $counter=0;
}

?>