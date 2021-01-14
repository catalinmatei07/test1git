<?php
$x=array(2,6,1,7,3,6,8,3,3,1);
$y=array(4,6,2,7,5,3,5,8,4,5);
$s=0;
if(count($x)==count($y)){
for($i=0;$i<count($x);$i++)
{
    $s=$s+($x[$i]*$y[$i]);
}  
}
else{
    echo "tablourile nu au acelasi numar de elemente";
}
echo $s;

?>