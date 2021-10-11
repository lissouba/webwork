

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
        <link rel="stylesheet" type="text/css" href="style1.css" />
        <style type="text/css">
            .index {
                background-image: url(back.jpg);color: white;



            }
        </style>

</head>
<body class="index">

<form id="login" action="login.php" method="POST" >
    <h1 id="ff-proof" class="ribbon">MY WEB PAGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
    <div class="apple">
      <div class="top"><span></span></div>
      <div class="butt"><span></span></div>
      <div class="bite"></div>
  </div>
    <fieldset id="inputs">
        <input id="username" type="text" name="username" onblur="if(this.value=='')this.value='Username';" onfocus="if(this.value=='username')this.value='';" value="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"/>

        <input id="password" type="Password" name="password" onblur="if(this.value=='')this.value='Password';" onfocus="if(this.value=='Password')this.value='';" value="Password"  value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"/>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Login"/>
       <p class="option"><input type="checkbox" name="remember" /> Remember me&nbsp;&nbsp;|
        <a href="try.php">Signup</a></p>
    </fieldset>

</form>

</body>
</html>