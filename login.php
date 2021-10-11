
<?php
session_start();
include "database.php";
$username = $_POST['username'];
$password =sha1($_POST['password']);

$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';echo $password;
$_SESSION['user']=$username;
$_SESSION['pass']=$password;
header("location:myne.php");

if(!empty($_POST["remember"])) {
            setcookie ("user",$_POST["username"],time()+ 3600);
            setcookie ("pass",$_POST["password"],time()+ 3600);
            echo "Cookies Set Successfuly";
            }

}
else{
echo 'Incorrect username or password';
}
?>