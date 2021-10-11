<?php
/*session_start();
if(!isset($_SESSION['user'],$_SESSION['pass'])){
  header("location:index.php");
}
$username=$_SESSION['user'];
$password=$_SESSION['pass'];
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="try.css">
</head>
<body>

<div id="wrapper">

  <form name="login-form" class="login-form"  action="signup.php" method="POST">
  
    <div class="header">
    <h1 style="text-align:center">Login Form</h1>
    <span>Fill out the form below to create your account.</span>
    </div>
  
    <div class="content">
    <input type="text"  name="firstname" class="input username" placeholder="firstname" />
    <div class="user-icon"></div>
    <input  type="text"  name="lastname" class="input username" placeholder="lastname" />
    <div class="user-icon"></div>
    <input  type="text" name="email" class="input username" placeholder="email" />
    <div class="email-icon"></div>

<input type="text" name="username"  class="input username" placeholder="Username" />
    <div class="user-icon"></div>

    <input  type="password" class="input password" name="password" placeholder="Password" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, special character and at least 10 or more characters"  required />
    <div class="pass-icon"></div>   
    </div>

    <div class="footer" >
 
    <input type="submit" name="submit" value="Register" class="register" />
     
    </div>
  
  </form>

</div>
<div class="gradient"></div>


</body>
</html>