<?php

echo " <b>9. Fie a o variabilă întreagă cu valoarea 5 și b o variabilă întreagă cu valoarea 10. Evaluați expresia: (a%2= = 0) && (b%2= =0) || (a%2= = 1) &&( b%2= =1), unde: a%b reprezintă restul împărțirii lui a la b. :</b> ","<br>", "<br>";
$a=5;
$b=10;

if((($a%2 == 0) && ($b%2==0)) || (($a%2== 1) &&( $b%2==1))){
echo "true";
}
else{
    echo "false";
}



?>