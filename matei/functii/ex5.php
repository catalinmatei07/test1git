<?php
$text = $_GET["text"];
function upperToLoweAndViceversa($string)
{
    $str_arr = str_split($string);
    $strRes = "";

    foreach ($str_arr as $char) {
        if (ord($char) > 90) {
            $strRes .= chr(ord($char) - 32);
        } else {
            $strRes .= chr(ord($char) + 32);
        }
    }

    echo $strRes;
}


upperToLoweAndViceversa($text);