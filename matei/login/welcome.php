<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .page-header{
            border: none
        }
    </style>
    
</head>
<body>
    <div class="page-header">
        <h1><?php echo htmlspecialchars($_SESSION["username"]);?>, Bravo, ai reusit sa te loghezi</h1>
    </div>
<div class="button-form1">
        <p>    
        <a href="logout.php" class="form-button">Delogheaza-te</a>
    </p>
</div>
</body>
</html>