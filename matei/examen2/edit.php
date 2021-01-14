<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include_once ("conexiune.php");

if (isset($_POST['update']))
{
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
    $oras = mysqli_real_escape_string($mysqli, $_POST['oras']);
    $tara = mysqli_real_escape_string($mysqli, $_POST['tara']);
    $img = mysqli_real_escape_string($mysqli, $_POST['img']);
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM persoanee WHERE id=$id");

while ($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $nume = $res['nume'];
    $prenume = $res['prenume'];
    $oras = $res['oras'];
    $tara = $res['tara'];
    $img = $res['img'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="styles.css">

</head>

<body>




<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="POST" action="sendEdit.php">
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
				<td>tara</td>
				<td><input type="text" name="oras" value="<?php echo $oras; ?>"></td>
			</tr>
			<tr> 
				<td>oras</td>
				<td><input type="text" name="tara" value="<?php echo $tara; ?>"></td>
			</tr>
			<tr> 
				<td>img</td>
				<td><input type="text" name="img" value="<?php echo $img; ?>"></td>
			</tr>
			
			<input type="submit" value="Editeaza persoana">
		</table>
	</form>


</body>

</html>
