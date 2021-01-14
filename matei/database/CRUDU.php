<?php
  include ("conexiune.php");
  $result = mysqli_query($conexiune, "SELECT * FROM elevi");
   
  while($row = mysqli_fetch_assoc($result)) {
   
  ?>
  <form action="updated.php" method="post">
   
  <input type="hidden" name="ud_id" value="<?php echo  $row['id'];?>">
  Nume: <input type="text" name="ud_nume" value="<?php echo $row['nume'];?>">
  Prenume: <input type="text" name="ud_prenume" value="<?php echo $row['prenume'];?>">
  Adresa: <input type="text" name="ud_adresa" value="<?php echo $row['adresa'];?>">
  Email: <input type="text" name="ud_email" value="<?php echo $row['email'];?>">
  Data Nasterii: <input type="text" name="ud_datanasterii" value="<?php echo $row['datanasterii'];?>">
  Sex: <input type="text" name="ud_sex" value="<?php echo $row['sex'];?>">
  Media Bac: <input type="text" name="ud_mediabac" value="<?php echo $row['mediabac'];?>">
  <input type="Submit" value="Modifica">
  </form>
  <?php
   }
  ?>