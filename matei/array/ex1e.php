<?php
$a=array(43,432,432,661,432,122,565,123,412,675);

$arrLength = count($a);
    for ($i = $arrLength - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
    
            if ($a[$j] > $a[$j + 1]) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
            }
    
        }}
        
print_r($a);
?>