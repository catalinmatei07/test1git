<?php

echo " <b>22. Se consideră numărul natural n. Să se afișeze “Da” sau “Nu” în dependență dacă acesta este
format din două cifre. `. </b> ","<br>", "<br>";
$n=11;
for($i=10;$i<100;$i++)
{
    if($i==$n){
        $counter=1;
    break;
    }
    else
    {
        $counter=0;
    }

}
if($counter==1){
    echo "da";
}
else{
    echo "nu";
}

?>