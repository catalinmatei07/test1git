<?php


echo " <b>20.Se consideră numărul natural n care constituie un an calendaristic. Să se scrie un script PHP care
determină dacă n reprezintă un an bisect. Anul se numește bisect dacă se împarte fără rest la 4 și
nu se împarte la 100 sau dacă se împarte fără rest la 400. . </b> ","<br>", "<br>";
$an=2019;

   if ($an % 400 == 0) {
    echo " este an bisect.", $an;
 }

 else if ($an % 100 == 0) {
    echo " nu este an bisect.", $an;
 }

 else if ($an % 4 == 0) {
    echo " este an bisect.", $an;
 }

 else {
    echo " nu este an bisect.", $an;
 }
?>