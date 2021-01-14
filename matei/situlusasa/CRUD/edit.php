<?php
include_once ("conexiune.php");

if (isset($_POST['update']))
{
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
    $prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
    $adresa = mysqli_real_escape_string($mysqli, $_POST['adresa']);
    $emailul = mysqli_real_escape_string($mysqli, $_POST['email']);
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
    $emailul = $res['email'];
    $data_nasterii = $res['data_nasterii'];
    $sex = $res['sex'];
    $media_bac = $res['media_bac'];

}
?>
<html>
<head>
   <title>Editeaza elev</title>
</head>
<style>
	table{
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 30%;
	    margin: auto;
	    margin-top: 30px;
		border-radius: 5px;
    	background-color: #f2f2f2;
		color: #232323;
		border: ;
	   }
	   td {
		padding: 10px;
	   }
	   input[type=text], select {
    	width: 100%;
 		padding: 12px 20px;
    	margin: 8px 0;
    	display: inline-block;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	box-sizing: border-box;
	   }
	   .btn{
		background-color: #c4c4c4; 
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
	   }
</style>
<body>
   <a href="index.php">Inapoi la tabela</a>
   <br/><br/>
   <form name="form1" method="post" action="sendEdit.php">
      <table border="0">
         <tr style="display: none">
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
         </tr>
         <tr>
            <td>Nume</td>
            <td><input type="text" name="nume" value="<?php echo $nume; ?>"></td>
         </tr>
         <tr>
            <td>Prenume</td>
            <td><input type="text" name="prenume" value="<?php echo $prenume; ?>"></td>
         </tr>
         <tr>
            <td>Adresa</td>
            <td><input type="text" name="adresa" value="<?php echo $adresa; ?>"></td>
         </tr>
         <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $emailul; ?>"></td>
         </tr>
         <tr>
            <td>Data nasterii</td>
            <td><input type="text" name="data_nasterii" value="<?php echo $data_nasterii; ?>"></td>
         </tr>
         <tr>
            <td>Sex</td>
            <td><input type="text" name="sex" value="<?php echo $sex; ?>"></td>
         </tr>
         <tr>
            <td>Media BAC</td>
            <td><input type="text" name="media_bac" value="<?php echo $media_bac; ?>"></td>
		 </tr>
		 <tr>
			 <td></td>
			 <td>
			 <input type="submit" class="btn" value="Editeaza elev">
			 </td>
		 </tr>
         
      </table>
   </form>
</body>
</html>