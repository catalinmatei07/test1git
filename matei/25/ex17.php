<?php

echo " <b>17. Să se determine câte numere divizibile prin 3 sunt pe intervalul [a; b].  </b> ","<br>", "<br>";
$counter = 0;

$a=4;
$b=43;
for($i=$a;$i<$b;$i++){
    if($i%3==0){
        $counter++;
    }
}
echo $counter;

?>