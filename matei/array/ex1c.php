<?php
$a=array(43,432,432,661,432,122,565,123,412,675);

$b=$a;

sort($b);
for($i=0;$i<count($a);$i++)
{
    if($a==$b){
        $ans=1;
    }
    else {$ans=0; echo "nu ii sortat crescator"; break;}
}

if($ans){
    echo "este sortat crescator";
}


?>