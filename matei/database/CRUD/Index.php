<?php
  include ("conexiune.php");
  $sql=mysqli_query($conexiune, "SELECT * FROM elevi");
  echo "<table border=1>";
  echo  "<tr><td>ID</td><td>Nume</td><td>Prenume</td><td>Adresa</td><td>Email</td><td>Data Nasterii</td><td>Sex</td><td>Media Bac</td><td>Actiunii</td></tr>";
  while ($row=mysqli_fetch_row($sql)) {
  echo  "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>  <input type='checkbox' name='delete'>$row[8]</td></tr>";
  }
  echo "</table>";
  mysqli_close($conexiune);

  echo '<form method="POST" action="CRUDI.html"> <input type="submit" value="Trimite"> </form>';

  ?>
