<?php

session_start();
// connect to server
{
$required = $_SESSION['security_code'];



$hostname = "localhost";

$username = "root";

$password= "";

$databaseName = "messDB";


$dbConnected = mysqli_connect($hostname, $username, $password, $databaseName, null);

$dbSelected = mysqli_select_db($dbConnected, $databaseName);

$dbSuccess = true;
}

if($dbConnected)
{
	if($dbSelected)
	$dbSuccess = true;
	else
	$dbSuccess = false;
			}
					
			
if($dbSuccess)
{

if (!empty(($_POST['firstname'])) && !empty(($_POST['lastname'])) && !empty(($_POST['email'])) ) 
{
    $firstname = htmlspecialchars($_POST['firstname']);
    
     $lastname = htmlspecialchars($_POST['lastname']);


    $email = htmlspecialchars($_POST['email']);
    

//insert into Table
{
$insert_SQL  = "INSERT INTO Info ( ";
$insert_SQL .= "FirstName, ";
$insert_SQL .= "LastName, ";
$insert_SQL .= "MailID ) ";


$insert_SQL .= "VALUES ";


$insert_SQL  .= "( ";
$insert_SQL .= "'$firstname', ";
$insert_SQL .= "'$lastname', ";
$insert_SQL .= "'$email' ) ";




if(mysqli_query($dbConnected, $insert_SQL))
{
//redirect: "SignedIn.html"
echo "INSERT SQL messDB - SUCCESSFUL";
}
else
{
echo "INSERT SQL messDB - FAILED";

}
}


}
else
{
/**
* if name empty: display: Empty name
* if location empty: display null location
  ..... 


**/


if(empty($_POST['firstname']))
{
echo "First name not set<br /><br />";
}
if(empty($_POST['lastname']))
{
echo "Last name not set<br /><br />";
}

if(empty($_POST['email']))
{
echo "E-mail not set<br /><br />";
}


}




}

?>
