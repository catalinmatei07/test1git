<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include_once ("conexiune.php");
$result = mysqli_query($mysqli, "SELECT * FROM persoanee"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
       <div class="nav">
           <div class="left-side">
               <h2>Wurk</h2>
           </div>
           <div class="right-side">
               <ul>
                   <li><a href="ourteam.php">Our Team</a></li>
                   <li><a href="index.php" class="form-button"><b>Dashboard</b></a></li>
                   <li><a href="logout.php" class="form-button">Delogheaza-te</a></li>
               
               </ul>
           </div>
       </div>
   </header>
<div class="grid-justify">
<div class="container-crud">
<div>
<form method="POST" action="add.html">
               <input class="buttonstyle" type="submit" value="Adauga persoana noua">
</form>
</div>
<div>
<table width='100%' border=0>
<tr class="trstyle">
                  <td>id</td>
                  <td>nume</td>
                  <td>prenume</td>
                  <td>oras</td>
                  <td>tara</td>
                  <td>img preview</td>
                  <td>Action</td>
</tr>
               <?php
while ($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $nume = $res['nume'];
    $prenume = $res['prenume'];
    $oras = $res['oras'];
    $tara = $res['tara'];
    $img = $res['img'];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nume</td>";
    echo "<td>$prenume</td>";
    echo "<td>$oras</td>";
    echo "<td>$tara</td>";
    echo "<td><img class='crud-img' src='$img' alt='img1'></td>";
    echo " <div class='style-decoration'> <td><a href=\"edit.php?id=$res[id]\">Edit</a>  <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Sigur doresti sa stergi aceasta inregistrare?')\">Delete</a></td></div>";


}
?>

            </table>
        </div>

    </div>
</div>
</body>
</html>
