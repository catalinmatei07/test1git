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
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
   </head>

   <style>
   * {
    padding: 0;
    margin: 0;
  }
  
  .right-side {
    display: grid;
    grid-template-rows: 20% 60% 20%;
    align-content: center;
  }
  
  .login-content {
    justify-self: center;

  }

  .form-control {
    margin-top: 10px;
    border-radius: 4px;
  }
  
  .register {
    justify-self: right;
    margin-top: 32px;
    align-self: start;
    margin-right: 64px;
  }
  
  .register p {
    font-family: 'Manrope', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }
  
  .register a {
    background: #FFD25F;
    border-radius: 4px;
    padding: 10px 30px;
    position: relative;
    margin-top: 20px;
    margin-left: 20px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: none;
  }
  
  .copyright-align {
    justify-self: right;
    align-self: end;
    margin-bottom: 20px;
    margin-right: 64px;
  }
  
  .copyright-align p {
    font-family: 'Manrope', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    text-transform: uppercase;
    color: #000000;
    opacity: 0.5;
  }
  
  .login-title h2 {
    font-family: 'Manrope', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 39px;
    color: #000000;
  }

  .form-group {
      margin-top: 16px;
  }
  
  .login-title p {
    font-family: 'Manrope', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;
    opacity: 0.5;
  }
  
  .form-group label {
    font-family: 'Manrope', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    color: #000000;
  }
  
  .form-group input {
    background: #F9F9F9;
    border: 1px solid #E6E6E6;
    padding: 16px 18px;
    width: 350px;
  }
  
  .form-button input {
    background: #FFD25F;
    border-radius: 4px;
    padding: 10px 30px;
    position: absolute;
    margin-top: 20px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: none;
    cursor: pointer;
  }
  
  .login-content-middle {
    margin-top: 64px;
  }

  .form-button1 {
    background: #5762D5;
    border-radius: 8px;
    padding: 15px 30px;
    position: absolute;
    margin-top: 32px;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: none;

  }
   </style>

   <body>
      <div class="login-content-grid">
         <div class="right-side">
            <div class="register">
               <p>Ai cont deja? <a href="login.php">Logare</a></p>
            </div>
            <div class="login-content">
               <div class="login-title">
                  <h2>Inregistreza-te</h2>
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
         </div>
      </div>
   </body>
</html>