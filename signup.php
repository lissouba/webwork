<?php

include "database.php";
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$user=$_POST['username'];


$pass=sha1($_POST['password']);




$sql="insert into user (Firstname,Lastname,email,username,password) values(?,?,?,?,?)";

$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
	echo "YOUR ACCOUNT HAS CREATED SUCCESSFULY"."</br>";
	echo '<a href="index.php">LOGIN</a>'; 
	mysqli_stmt_bind_param($st,"sssss",$fname,$lname,$email,$user,$pass);
	mysqli_stmt_execute($st);
}
else{

	//echo "error:".$sql."<br>".$conn->error;
	echo "error!";
}




?>