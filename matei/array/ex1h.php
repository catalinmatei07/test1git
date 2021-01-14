<?php
$a=array(2,6,1,7,3,6,8,3,3,1);
$element=6;
for($i=0;$i<count($a);$i++){
if($a[$i]==$element)
    {
        echo "valoarea ",$element, " se afla pe pozitia " ,$i, "<br>";
    }
}
?>