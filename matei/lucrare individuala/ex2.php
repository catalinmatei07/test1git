<?php
$bdate = $_GET["datanasterii"];


$space = " ";
$month = "Oct";
$day = "07";
$year = "2001";
$today = date("M d Y");
$todayarray = explode(" ", $today);
$bdatearray = explode(" ", $bdate); 
$datetoday = $todayarray[0] . $space . $todayarray[1] . $space . $todayarray[2];
$date = $bdatearray[0] . $space . $bdatearray[1] . $space . $todayarray[2];
$d1 = strtotime($date);
$d2 = strtotime($datetoday);
$days = ($d2 - $d1) / 60 / 60 / 24;

if (!$days)
{
    echo "La multi ani cu sanatate, sa iti dea domnu tot ce doresti, zile senine si alte cuvinte dulci, mi lene sa mai scriu";
    echo "<br>";
    echo "ai implinit ", $todayarray[2] - $bdatearray[2], " anii";
}
elseif ($days > 0)
{
    if ($days == 1)
    {
        echo "a trecut o zi de la ziua ta";
    }
    else
    { $x=abs($days);
        $int_cast = (int)$x;
        echo "ziua ta a fost amu ", $int_cast , " zile";
    }
}

else
{
    $days = (int)$days;
    $days = abs($days);
    if ($days == 1)
    {
        echo "mai ai o zi pana la ziua ta";
    }
    else
    {   $x=abs($days);
        $int_cast = (int)$x;
        echo "mai ai ", $int_cast , " zile pana la ziua ta";
    }
}
?>
