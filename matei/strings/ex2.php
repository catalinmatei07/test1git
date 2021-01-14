<?php
$string="tatal lui Gigel merge la Metrou";
$pos = strcspn($string, 'ABCDEFGHJIJKLMNOPQRSTUVWXYZ');
if ($pos < strlen($string)) {
    echo "pozitia primului caracter cu litera mare este ", $pos;
}
?>  