<?php
include_once ("conexiune.php");

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
$prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
$adresa = mysqli_real_escape_string($mysqli, $_POST['adresa']);
$emailul = mysqli_real_escape_string($mysqli, $_POST['email']);
$data_nasterii = mysqli_real_escape_string($mysqli, $_POST['data_nasterii']);
$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
$media_bac = mysqli_real_escape_string($mysqli, $_POST['media_bac']);

$result = mysqli_query($mysqli, "UPDATE elevi SET nume='$nume',prenume='$prenume',adresa='$adresa',email='$emailul',data_nasterii='$data_nasterii',sex='$sex',media_bac='$media_bac' WHERE id=$id");

header("Location: index.php");
?>
