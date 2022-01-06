<?php
session_start();
{
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="studb"; // Database name
$tbl_name="Login"; // Table name
$dbConnected = mysqli_connect($host, $username, $password, $db_name, null);

$dbSelected = mysqli_select_db($dbConnected, $db_name);

$dbSuccess = true;
}

if($dbConnected)
{
	if($dbSelected)
	$dbSuccess = true;
	else
	$dbSuccess = false;
			}
					
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
if($dbSuccess)
{
$myusername=$_POST['uname'];
$mypassword=$_POST['pwd'];

$sql="SELECT * FROM $tbl_name WHERE uname='$myusername' and pwd='$mypassword'";
$result=mysqli_query($dbConnected, $sql);

$count=mysqli_num_rows($result);

if($count==2){
	$row=mysqli_fetch_row($result);
	$sname=$row[0];
	print("<h1>Welcome, $sname!<br></h1>");
	echo "<h2>Login Success!!!</h2>";
	

		setcookie("UName","",time()-5);
		setcookie("Pwd","",time()-5);
	

//	header("location:login_success.html");
}
else {
	echo "<h2>Login Failed!!!</h2>";
	//header("location:login_failed.php");
}
}
else echo "FATAL ERROR OCCURRED"
?>
