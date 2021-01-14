


<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include_once ("conexiune.php");

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
$prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
$oras = mysqli_real_escape_string($mysqli, $_POST['oras']);
$tara = mysqli_real_escape_string($mysqli, $_POST['tara']);
$img = mysqli_real_escape_string($mysqli, $_POST['img']);

$result = mysqli_query($mysqli, "UPDATE persoanee SET nume='$nume',prenume='$prenume',oras='$oras',tara='$tara',img='$img' WHERE id=$id");

header("Location: index.php");
?>
