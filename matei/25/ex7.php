<?php 

echo " <b>7. De elaborat un script care va calcula numărul exact de ani, luni și zile dela ziua de naștere.</b> ","<br>", "<br>";
$ziuaazi=date('d');
$lunaazi=date('m');
$anuazi=date('yy');




    $ziuanasterii = 7; 
    $lunanasterii = 10; 
    $anulnasterii = 2001; 
  

    $lunile = array(31, 28, 31, 30, 31, 30,  
                   31, 31, 30, 31, 30, 31 ); 
  

    if ($ziuanasterii > $ziuaazi)  
    { 
        $ziuaazi = $ziuaazi +  
                        $lunile[$lunanasterii - 1]; 
        $lunaazi = $lunaazi - 1; 
    } 
  

    if ($lunanasterii > $lunaazi) 
    { 
        $anuazi = $anuazi - 1; 
        $lunaazi = $lunaazi + 12; 
    } 
  
 
    $datacalculata = $ziuaazi -  
                       $ziuanasterii; 
    $lunacalculata = $lunaazi -  
                        $lunanasterii; 
    $anulcalulat = $anuazi -  
                       $anulnasterii; 

    echo "Varsta ta este de \n",$anulcalulat," anii ", $lunacalculata, " lunii si ", $datacalculata, " zile";  
                                  

  
    
?>