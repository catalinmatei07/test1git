<?php

echo " <b>9. Să se scrie un program care să afișeze următoarea piramidă de numere:</b> ","<br>", "<br>";

for($i=1;$i<10;$i++){ 
     if($i%2==1){
    for($j=1;$j<=$i;$j++)
    {
      
        echo $j;
    }
    echo "<br>";
}}



?>