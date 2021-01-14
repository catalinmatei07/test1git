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
<title>WURK | Our Team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    <title>Document</title>
</head>
<body>
   <header>
       <div class="nav">
           <div class="left-side">
               <h2>Wurk</h2>
           </div>
           <div class="right-side">
               <ul>
                   <li><a href="ourteam.php"><b>Our Team</b></a></li>
                   <li><a href="index.php" class="form-button">Dashboard</a></li>
                   <li><a href="logout.php" class="form-button">Delogheaza-te</a></li>
               
               </ul>
           </div>
       </div>
   </header>
   <div class="hrr">
    <div>
        <hr>
    </div>
   </div>
   <section class="section1">
       <h1>
        Meet our team
       </h1>
       <h3>
        We come from 5 different countries and cultures. Despite our different backgrounds the understanding of technology and our passion for personal growth unite us.
       </h3>
   </section>
   <div class="section2-center">
   <section class="section2">
   <?php
while ($res = mysqli_fetch_array($result))
{

    $nume = $res['nume'];
    $prenume = $res['prenume'];
    $oras = $res['oras'];
    $tara = $res['tara'];
    $img = $res['img'];


    echo "<div class='person'>";
    echo "<div>";
    echo "<img src='$img' alt='img1'>";
    echo "</div>";
    echo "<div>";
    echo $nume ," ", $prenume;
    echo "</div>";
    echo "<div>";    
    echo $oras, ", ", $tara;
    echo "</div>";
    echo "</div>";

} ?>
   </section>
   </div>
</body>
</html>
