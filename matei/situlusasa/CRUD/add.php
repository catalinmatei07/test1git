<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once ("conexiune.php");

if (isset($_POST['Submit']))
{
    $nume = mysqli_real_escape_string($mysqli, $_POST['Nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['Prenume']);
    $adresa = mysqli_real_escape_string($mysqli, $_POST['Adresa']);
    $emailul = mysqli_real_escape_string($mysqli, $_POST['Email']);
    $data_nasterii = mysqli_real_escape_string($mysqli, $_POST['Data_nasterii']);
    $sex = mysqli_real_escape_string($mysqli, $_POST['Sex']);
    $media_bac = mysqli_real_escape_string($mysqli, $_POST['Media_bac']);
    $result = mysqli_query($mysqli, "INSERT INTO elevi(nume,prenume,adresa,email,data_nasterii,sex,media_bac) VALUES('$nume','$prenume','$adresa','$emailul','$data_nasterii','$sex','$media_bac')");

    echo "<font color='green'>Elev adăugat cu succes.";
    echo "<br/><a href='index.php'>Vezi rezultatele</a>";

}
?>
</body>
</html>
