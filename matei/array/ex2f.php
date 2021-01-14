<?php
$x=array(2,6,1,7,3,6,8,3,3,1);
$y=array(4,6,2,7,5,3,5,8,4,5);

$z=array_merge($x,$y);
print_r($z);
echo "<br>";

sort($z);
print_r($z);
?>