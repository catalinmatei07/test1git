<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include ("conexiune.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM persoanee WHERE id=$id");

header("Location:index.php");
?>
