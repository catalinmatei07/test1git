<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once ("conexiune.php");
$result = mysqli_query($mysqli, "SELECT * FROM persoanee"); 
if (isset($_POST['Submit']))
{
    $nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
    $oras = mysqli_real_escape_string($mysqli, $_POST['oras']);
    $tara = mysqli_real_escape_string($mysqli, $_POST['tara']);
    $img = mysqli_real_escape_string($mysqli, $_POST['img']);
    $result = mysqli_query($mysqli, "INSERT INTO persoanee(nume,prenume,oras,tara,img) VALUES('$nume','$prenume','$oras','$tara','$img')");

    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";

}
?>
</body>
</html>
