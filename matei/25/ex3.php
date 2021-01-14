<?php

echo " <b>3. Se dă șirul 1..20, utilizînd operatorul while. Să se afișeze numerele pare apoi și numerele impare din șirul dat.</b> ","<br>", "<br>";

$i=20;echo "pare: ";
while($i>0)
{ 
    if($i%2==0){
        echo $i." ";
    }
    $i--;
}
echo "<br>";
$i=20;echo "impare: ";
while($i>0)
{ 
    if($i%2==1){
        echo $i." ";
    }
    $i--;
}
?>