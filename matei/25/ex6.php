<?php

echo " <b>6. De elaborat un script ce va afișa tabla de șah.</b> ","<br>", "<br>";
echo "<table border='1'>";
for($i=0;$i<8;$i++)
{
    echo "<tr>";
    for($j=0;$j<8;$j++)
    {
        if(($j+$i)%2==0){
            echo '<td height="50px" width="50px"  bgcolor="white">';
        }
        else{
            echo '<td height="50px" width="50px" bgcolor="black">';
        }
    }
    echo "</tr>";
}
echo "</table>";
?>