<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>

</head>
<body>
  <form action="hey2.php" method="POST">
Username</br>
<input type="text" name="user" placeholder="" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br>
Password</br>
<input type="password" name="pass" placeholder="" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br>
 <input type="submit" name="signin" value="signup"><br><br>
<p><input type="checkbox" name="remember" /> Remember me</p>
 New here!<a href="signup1.php">Signup</a>

</form>


</body>
</html>