<?php
$a=array(6,7,5,4,6,7,8,9,7,6,5,4,4,6,7,7,9,8,9,9,7,6,5,10,10,9,9,10);


for($j=1;$j<=10;$j++){
    $counter=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]==$j){
            $counter++;
        }
    }
    if($counter == 0){
        echo "nota ", $j, " nu a aparut deloc", "<br>";
    }
    else if($counter == 1){
        echo "nota ", $j, " a aparut o singura data", "<br>";
    }
    else{
        echo "nota ",$j, " a aparut de ", $counter , " ori", "<br>";
    }
}
$s=0;
for($i=0;$i<count($a);$i++){
$s=$s+$a[$i];
}
echo "<br>", "<br>";
echo "media aritmetica a clasei este ", round($s/count($a), 2);
?>