
<?php
session_start();
include "database.php";
$username = $_POST['username'];
$password =$_POST['password'];
$salted="wertyuihhhh".$password;
$password=hash('sha1', $salted);

$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND status='Verified' ";
    $stmt = $conn->prepare($query);

    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
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

    header("location:index2.php");

}}
else{
echo 'Incorrect username or password';
}
?>