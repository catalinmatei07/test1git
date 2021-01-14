<?php
$string = "mama spala vase";
$count=0;
for ($i = 0;$i < strlen($string);$i++)
{
     if ($string[$i] == "a" or $string[$i] == "e" or $string[$i] == "o" or $string[$i] == "i" or $string[$i] == "u")
        {
          if($i%2==1){
              $count++;
          }
        }
}
echo $count;
?>
