<?php 
if (isset($_POST['button'])) {
	$new=$_POST['new'];
  $a=0;
  echo $new;
	$pass1=$_POST['password1'];
	$pass2=$_POST['password2'];
  
	 if ($pass1!=$pass2) {
    echo '<script language="javascript">';
echo 'alert("passwors dont match");';
echo "\n";
 
header("location:reset.php?new=$new");
echo '</script>';

exit();
	}
	require "database.php";
$sql="select* from reset where token=?";
$pas= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$new);
  mysqli_stmt_execute($pas);
  $select=mysqli_stmt_get_result($pas);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['token']==$new)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request".$new;
  }
  else
  {
$sql="select* from reset where email=?";
$pas= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$tokenemail);
  mysqli_stmt_execute($pas);
  $select=mysqli_stmt_get_result($pas);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo "There is an error!";
  }
  else
  {
  $sql="UPDATE user set password=? where email=?";
  $pas= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
	$newhash=$pass1;
  $salted="wertyuihhhh".$newhash;
  $newhash=hash('sha1', $salted);
  //$x=sha1($_POST['password']);
  mysqli_stmt_bind_param($pas,"ss",$newhash,$tokenemail);
  mysqli_stmt_execute($pas);

  $sql="delete from reset where email=?";
     $pas= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$tokenemail);
  mysqli_stmt_execute($pas);
  header("location:index.php");
}	
  }

  	}
}
}}}
else
{
	header("location:index.php");
}
?>