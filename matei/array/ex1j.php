<?php 
  
function binarySearch(Array $a, $x) 
{ 
    if (count($a) === 0) return false; 
    $low = 0; 
    $high = count($a) - 1; 
      
    while ($low <= $high) { 
          
        $mid = floor(($low + $high) / 2); 
   

        if($a[$mid] == $x) { 
            return true; 
        } 
  
        if ($x < $a[$mid]) { 

            $high = $mid -1; 
        } 
        else { 

            $low = $mid + 1; 
        } 
    } 
      
    return false; 
} 
  
$a=array(2,6,1,7,3,6,8,3,3,1);
$value = 2; 
if(binarySearch($a, $value) == true) { 
    echo $value." se afla in arrayul meu"; 
} 
else { 
    echo $value." nu se afla in arrayul meu"; 
} 
?> 