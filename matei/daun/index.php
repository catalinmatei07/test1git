<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="color">
        <?php
           include_once ("conexiune.php");
           $result = mysqli_query($mysqli, "SELECT * FROM elevi"); 
                  while ($res = mysqli_fetch_array($result))
                  {

                  echo $res['id'] ;
                  echo $res['nume'], " "; 
                  }

                 

                  ?>
        </div>
    </div>
</body>
</html>