<?php
$p=0;
$g=mysql_connect("localhost","root","");
mysql_select_db("mydb",$g);
$e=mysql_query("select * from user");
while ($k=mysql_fetch_array($e)) 
{
if ($user==$k['username'] && $pass==$k['password'])
 {
	$p=1;
}
}

if($p==1)
{
	//echo "<h1 style='color:chocolate; font-family:forte; text-align:center; font-size:20px;'>wellcome to your admin page</h1>";//
include('myne.php');
}
else
{
    echo "<center style='color: coral; font-size:30px; margin-top:4cm;'>";
    echo "passcode or user name is incorrect!!";
	echo "</center>";
	echo "<center style='color:blue; font-size:30px; font-family:impact; margin-top:4cm;'>";
	echo "<a href='login.html'<button>Click here to try again</button></a>";
	echo "</center>";
}
?>