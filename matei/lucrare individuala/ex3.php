
<?php

$morning = "Buna dimineata";
$day = "Buna ziua";
$evnening = "Buna seara";
$night = "Noapte buna";
$latenight = "De ce nu dormi, maine ai Programarea Web";


$current_time = date("G");


if ($current_time >= 7 && $current_time < 11) {
echo $morning;
}

elseif ($current_time >= 11 && $current_time < 18) {
echo $day;
}

elseif ($current_time >= 18 && $current_time < 22) {
echo $evnening;
}

elseif ($current_time >= 22 && $current_time < 24) {
echo $night;
}

elseif ($current_time >= 24 && $current_time <= 7) {
    echo $latenight;
    }
?>
