<?php
include_once ("conexiune.php");

if (isset($_POST['update']))
{
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
    $adresa = mysqli_real_escape_string($mysqli, $_POST['adresa']);
    $emailul = mysqli_real_escape_string($mysqli, $_POST['emailul']);
    $data_nasterii = mysqli_real_escape_string($mysqli, $_POST['data_nasterii']);
    $sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
    $media_bac = mysqli_real_escape_string($mysqli, $_POST['media_bac']);
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM elevi WHERE id=$id");

while ($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $nume = $res['nume'];
    $prenume = $res['prenume'];
    $adresa = $res['adresa'];
    $emailul = $res['emailul'];
    $data_nasterii = $res['data_nasterii'];
    $sex = $res['sex'];
    $media_bac = $res['media_bac'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="sendEdit.php">
		<table border="0">
			<tr style="display: none"> 
				<td>id</td>
				<td><input type="text" name="id" value="<?php echo $id; ?>"></td>
			</tr>
			<tr> 
				<td>nume</td>
				<td><input type="text" name="nume" value="<?php echo $nume; ?>"></td>
			</tr>
			<tr> 
				<td>prenume</td>
				<td><input type="text" name="prenume" value="<?php echo $prenume; ?>"></td>
			</tr>
			<tr> 
				<td>adresa</td>
				<td><input type="text" name="adresa" value="<?php echo $adresa; ?>"></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><input type="text" name="emailul" value="<?php echo $emailul; ?>"></td>
			</tr>
			<tr> 
				<td>data_nasterii</td>
				<td><input type="text" name="data_nasterii" value="<?php echo $data_nasterii; ?>"></td>
			</tr>
			<tr> 
				<td>sex</td>
				<td><input type="text" name="sex" value="<?php echo $sex; ?>"></td>
			</tr>
			<tr> 
				<td>media_bac</td>
				<td><input type="text" name="media_bac" value="<?php echo $media_bac; ?>"></td>
			</tr>
			<input type="submit" value="Editeaza elev">
		</table>
	</form>
</body>
</html>
