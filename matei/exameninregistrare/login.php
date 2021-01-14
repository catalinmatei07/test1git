<?php
   session_start();
    
   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       header("location: welcome.php");
       exit;
   }
    
   
   require_once "config.php";
    
   $username = $password = "";
   $username_err = $password_err = "";
    
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    
   
       if(empty(trim($_POST["username"]))){
           $username_err = "Scrie Usernameul.";
       } else{
           $username = trim($_POST["username"]);
       }
       
   
       if(empty(trim($_POST["password"]))){
           $password_err = "Scrie Parola.";
       } else{
           $password = trim($_POST["password"]);
       }
       
       if(empty($username_err) && empty($password_err)){
           $sql = "SELECT id, username, password FROM users WHERE username = ?";
           
           if($stmt = mysqli_prepare($link, $sql)){
   
               mysqli_stmt_bind_param($stmt, "s", $param_username);
               
   
               $param_username = $username;
               
   
               if(mysqli_stmt_execute($stmt)){
   
                   mysqli_stmt_store_result($stmt);
                   
         
                   if(mysqli_stmt_num_rows($stmt) == 1){                    
   
                       mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                       if(mysqli_stmt_fetch($stmt)){
                           if(password_verify($password, $hashed_password)){
   
                               session_start();
                               
                               $_SESSION["loggedin"] = true;
                               $_SESSION["id"] = $id;
                               $_SESSION["username"] = $username;                            
                               
   
                               header("location: welcome.php");
                           } else{
       
                               $password_err = "Parola nu ii valida.";
                           }
                       }
                   } else{
   
                       $username_err = "Nu a fost gasit nici un username.";
                   }
               } else{
                   echo "Ceva nu e bine, incearca mai tarziu.";
               }
   
               mysqli_stmt_close($stmt);
           }
       }
       
       mysqli_close($link);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Login</title>
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   </head>
   <body>

         <div class="container">
<div class="margintop">
   
<div class="login-content">
               <div class="login-title">
                  <h2>Autentificare</h2>
               </div>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="login-content-middle">
                     <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label><br>
                        <input placeholder="Introduce-ti usernameul" type="text" name="username" class="form-control"  value="<?php echo $username; ?>">
                        <br>
                        <span class="help-block"><?php echo $username_err; ?></span>
                     </div>
                     <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label><br>
                        <input placeholder="Introduce-ti parola" type="password" name="password" class="form-control">
                        <br>  <span class="help-block"><?php echo $password_err; ?></span>
                     </div>
                     <div class="register">
               <p>Nu ai cont? <a href="register.php">Crează un cont</a>.</p>
                     <div class="form-button">
                        <input type="submit" class="btn btn-primary" value="Logheaza-te">
                     </div>
                  </div>
               </form>
            </div>
</div>
      
</div>
   </body>
</html>