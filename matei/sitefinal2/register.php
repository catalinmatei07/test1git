<?php
   require_once "config.php";
    
   
   $username = $password = $confirm_password = "";
   $username_err = $password_err = $confirm_password_err = "";
    
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    
   
       if(empty(trim($_POST["username"]))){
           $username_err = "Introdu un username.";
       } else{
   
           $sql = "SELECT id FROM users WHERE username = ?";
           
           if($stmt = mysqli_prepare($link, $sql)){
               mysqli_stmt_bind_param($stmt, "s", $param_username);
               
               $param_username = trim($_POST["username"]);
               
               if(mysqli_stmt_execute($stmt)){
   
                   mysqli_stmt_store_result($stmt);
                   
                   if(mysqli_stmt_num_rows($stmt) == 1){
                       $username_err = "Acest username este invalid.";
                   } else{
                       $username = trim($_POST["username"]);
                   }
               } else{
                   echo "Ceva nu e bine, incearca mai tarziu.";
               }
   
               mysqli_stmt_close($stmt);
           }
       }
       
       if(empty(trim($_POST["password"]))){
           $password_err = "Intordu parola.";     
       } elseif(strlen(trim($_POST["password"])) < 6){
           $password_err = "Parola trebuie sa aiba minim 6 caractere.";
       } else{
           $password = trim($_POST["password"]);
       }
       
   
       if(empty(trim($_POST["confirm_password"]))){
           $confirm_password_err = "Confirma parola.";     
       } else{
           $confirm_password = trim($_POST["confirm_password"]);
           if(empty($password_err) && ($password != $confirm_password)){
               $confirm_password_err = "Parolele nu se potrivesc.";
           }
       }
       
   
       if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
           
   
           $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            
           if($stmt = mysqli_prepare($link, $sql)){
   
               mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
               
   
               $param_username = $username;
               //$param_password = $password;
               $param_password = password_hash($password, PASSWORD_DEFAULT); 
               
   
               if(mysqli_stmt_execute($stmt)){
   
                   header("location: login.php");
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
      <title>Sign Up</title>
      <link rel="stylesheet" href="lstyle.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="login-content-grid">
         <div class="left-side">
            <div class="left-content">
               <div>
                  <p>Bine ai venit la</p>
               </div>
               <div>
                  <h2>
                     WURK
                  </h2>
               </div>
               <div>
                  <h3>
                     Inregistreaza-te pentru a Accesa Dashboard-ul
                  </h3>
               </div>
            </div>
         </div>
         <div class="right-side">
            <div class="register">
               <p>Ai cont deja? <a href="login.php">Logheaza-te in cont</a>.</p>
            </div>
            <div class="login-content">
               <div class="login-title">
                  <h2>Inregistreza-te pe WURK</h2>
                  <p>Introduceti datele de inregistrare mai jos.</p>
               </div>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="login-content-middle">
                     <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>   <br>
                        <input placeholder="Introduce-ti usernameul" type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <br><span class="help-block"><?php echo $username_err; ?></span>
                     </div>
                     <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>   <br>
                        <input placeholder="Introduce-ti parola" type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <br><span class="help-block"><?php echo $password_err; ?></span>
                     </div>
                     <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>   <br>
                        <input placeholder="Reintroduce-ti parola" type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <br><span class="help-block"><?php echo $confirm_password_err; ?></span>
                     </div>
                     <div class="form-button">
                        <input type="submit" class="btn btn-primary" value="Inregistreza-te">
                     </div>
                  </div>
               </form>
            </div>
            <div class="copyright-align">
               <p>Copyright © 2020 WURK</p>
            </div>
         </div>
      </div>
   </body>
</html>