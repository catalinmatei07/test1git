<?php
$a=array(2,6,1,7,3,6,8,3,3,1);
for($i=0;$i<count($a);$i++){
    $val = $a[$i];
    $j = $i-1;
    while($j>=0 && $a[$j] > $val){
        $a[$j+1] = $a[$j];
        $j--;
    }
    $a[$j+1] = $val;
}
print_r($a);
?>