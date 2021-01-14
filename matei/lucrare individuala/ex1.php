<?php
$bool=0;
$holidayarray = array(
    "Wed Jan 1",
    "Tue Jan 7",
    "Wed Jan 8",
    "Sun Apr 20",
    "Sun Apr 27",
    "Mon Jun 1",
    "Thu Aug 27",
    "Mon Aug 31",
    "Fri Dec 25",
    "Thu Dec 31"
);
for ($i = 0;$i < count($holidayarray);$i++)
{
    if (date("D M j") == $holidayarray[$i])
    {
        $date = date("D");
        if ($date == "Sat")
        {
            $date = $holidayarray[$i];
            $date = strtotime($date);
            $date = strtotime("+2 day", $date);
            echo "Comanda va fi livrata pe data de ", date('M d, Y', $date);
        }
        elseif ($date == "Sun")
        {
            $date = $holidayarray[$i];
            $date = strtotime($date);
            $date = strtotime("+1 day", $date);
            echo "Comanda va fi livrata pe data de ", date('M d, Y', $date);
        }
        else{
            echo "Comanda va fi livrata urmatoarea zi";
        $bool=1;
        }
    }
}
if($bool!=1){
    $date = date("D");
    if ($date == "Sat")
    {
        $date = date("D M j");
        $date = strtotime($date);
        $date = strtotime("+2 day", $date);
        echo "Comanda va fi livrata pe data de ", date('M d, Y', $date);
    }
    elseif ($date == "Sun")
    {
        $date = date("D M j");
        $date = strtotime($date);
        $date = strtotime("+1 day", $date);
        echo "Comanda va fi livrata pe data de ", date('M d, Y', $date);
    }
    else{
        $current_time = date("G");
    
    
    if ($current_time >= 0 && $current_time < 12) {
        echo "Comanda va fi livrata azi";
    }
    else{
        echo "Comanda va fi livrata intr-o alta zi";
    }
    }
}
?>
