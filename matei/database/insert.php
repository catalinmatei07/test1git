<?php
include ("conexiune.php");
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$query="INSERT INTO elevi (nume, prenume) VALUES ('$nume','$prenume')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error());
} else {
echo "datele au fost introduse";
}
mysqli_close($conexiune);
?>