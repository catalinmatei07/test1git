<?php
echo " <b>5. De elaborat un script ce va afișa tabla înmulțirii;</b> ","<br>", "<br>";
echo '<table border="1">';
echo "<tr>";
for($j=1;$j<=10;$j++)
{
    echo "<td>";
    for($i=1;$i<=10;$i++){
       
        echo $j."*".$i."=".$j*$i;
       
        echo "<br>";
    }
    echo "</td>";
  
    
  
}  echo "</tr>";
echo "</table>";
?>