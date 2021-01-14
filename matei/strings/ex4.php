<?php
$string="2+3 fac cinci";
$v=array();
    $v[0]=strrpos($string,"0");
    $v[1]=strrpos($string,"1");
    $v[2]=strrpos($string,"2");
    $v[3]=strrpos($string,"3");
    $v[4]=strrpos($string,"4");
    $v[5]=strrpos($string,"5");
    $v[6]=strrpos($string,"6");
    $v[7]=strrpos($string,"7");
    $v[8]=strrpos($string,"8");
    $v[9]=strrpos($string,"9");

echo max($v);

?>  