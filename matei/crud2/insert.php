<?php
include ("conexiune.php");
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$adresa=$_POST['adresa'];
$email=$_POST['email'];
$datanasterii=$_POST['datanasterii'];
$sex=$_POST['sex'];
$mediabac=$_POST['mediabac'];
$query="INSERT INTO elevi (nume, prenume, adresa, emailul, data_nasterii, sex, media_bac) VALUES ('$nume','$prenume','$adresa','$email','$datanasterii','$sex','$mediabac')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error());
} else {
echo "datele au fost introduse";
}
mysqli_close($conexiune);
?>