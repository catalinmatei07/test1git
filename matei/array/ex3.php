<?php
$a=array(2,6,1,7,3,6,8,3,3,1);
$b=array(4,6,2,7,5,3,5,8,4,5);
$c=array();
$poz=4;  
  $double=count($a)+count($b);
  
if($poz>=count($a)){
     for($i=0;$i<count($a);$i++){
        $c[$i]=$a[$i];
    }
    $j=0;
    for($i=count($a);$i<$double;$i++){
        $c[$i]=$b[$j];
        $j++;
    }
    for($i=0;$i<$double;$i++){
        echo $c[$i], " ";
    }
}
else{



$z=count($a)-$poz;

    for($i=0;$i<$poz;$i++){
        $c[$i]=$a[$i];
    }

    $j=0;
   $z1=count($b)+$poz;
    for($i=$poz;$i<$z1;$i++)
    {
        $c[$i]=$b[$j]; 
          $j++;
    }  
     

    for($i=$z1;$i<$double;$i++){
        $c[$i]=$a[$poz];
        $poz++;
    }

    for($i=0;$i<$double;$i++){
        echo $c[$i], " ";
    }
}

?>