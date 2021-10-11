<?php
session_start();
//create csrf token

if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      //echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>
<?php
if(!isset($_SESSION['user'],$_SESSION['pass'])){
  header("location:index.php");
}
$username=$_SESSION['user'];
$password=$_SESSION['pass'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>
  <style>
        .GFG {
            background-color: blue;
            border: 2px solid black;
            color: green;
            padding: 5px 10px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
        }
    </style>

</head>
<body style="background-color: green;background-image: url(back.jpg);color: white;">
     <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
 
<h1 style="text-align: center;">Welcome!!!!!</h1>
<h1><center> Login successful </center></h1>  
<h3><center> safe journey </center></h3>  



<div><center><img src='car.jpg'></center></div>

  <div style="text-align:center;background-color: gray;"> <button class="GFG" 
    onclick="window.location.href = 'logout.php';" >
        LOGOUT
    </button>
</div>
</body>
</html>