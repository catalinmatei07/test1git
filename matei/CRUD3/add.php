<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once ("conexiune.php");
$result = mysqli_query($mysqli, "SELECT * FROM elevi"); 
if (isset($_POST['Submit']))
{
    $nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
    $adresa = mysqli_real_escape_string($mysqli, $_POST['adresa']);
    $emailul = mysqli_real_escape_string($mysqli, $_POST['email']);
    $data_nasterii = mysqli_real_escape_string($mysqli, $_POST['data_nasterii']);
    $sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
    $media_bac = mysqli_real_escape_string($mysqli, $_POST['media_bac']);
    $result = mysqli_query($mysqli, "INSERT INTO elevi(nume,prenume,adresa,emailul,data_nasterii,sex,media_bac) VALUES('$nume','$prenume','$adresa','$emailul','$data_nasterii','$sex','$media_bac')");

    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";

}
?>
</body>
</html>
