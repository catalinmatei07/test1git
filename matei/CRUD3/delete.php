<?php
include ("conexiune.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM elevi WHERE id=$id");

header("Location:index.php");
?>
