<?php
include "database.php";
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$user=$_POST['username'];
$pass=sha1($_POST['password']);




$sql="insert into user (Firstname,Lastname,email,username,password) values('$fname','$lname','$email','$user','$pass')";


if($conn->query($sql)===TRUE)
{
	echo "New record created successfully";
}
else{

	echo "error:".$sql."<br>".$conn->error;
}




?>