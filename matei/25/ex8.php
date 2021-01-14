<?php

echo " <b>8. Să se scrie un program care să afișeze următoarele valori:</b> ","<br>", "<br>";

for($i=1;$i<10;$i++)
{
 if($i==1)
 {
     $z=($i*10)+9;
     $raspuns=$z+($i+1);
     echo $z ," + ",($i+1)," = ", $raspuns,"<br>"; 
 }
 else{
     $z=floor($z/10);

    
     $z=((($z*10)+$i)*10)+9;
     $raspuns=$z+($i+1);
     echo $z ," + ",($i+1)," = ", $raspuns,"<br>";  
    }  

}



?>