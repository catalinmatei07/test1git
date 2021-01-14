
<?php


 function capital_letters($s) {
 $u = 0;
  $d = 0;
  $n = strlen($s);

  for ($x=0; $x<$n; $x++) {
      $d = ord($s[$x]);
      if ($d > 64 && $d < 91) {
          $u++;
      }
  }

  return $u;
}

$string = "euMERg";
$upper=capital_letters($string);
echo ($upper/strlen($string))*100, "%"

?>  