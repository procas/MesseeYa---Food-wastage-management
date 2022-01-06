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

if (!empty(($_POST['firstname'])) && !empty(($_POST['lastname'])) && !empty(($_POST['email'])) 
&& !empty(($_POST['conpass'])) && !empty(($_POST['address'])) && !empty(($_POST['gender'])) && !empty(($_POST['captcha']))
&& !empty(($_POST['lat'])) && !empty(($_POST['lng'])) && !empty(($_POST['type'])) ) 
{
    $firstname = htmlspecialchars($_POST['firstname']);
    
     $lastname = htmlspecialchars($_POST['lastname']);


    $email = htmlspecialchars($_POST['email']);
    
    $conpass = htmlspecialchars($_POST['conpass']);

    $address = htmlspecialchars($_POST['address']);
     
    $gender = htmlspecialchars($_POST['gender']);
    
    $entered = htmlspecialchars($_POST['captcha']);
    
    $lat = htmlspecialchars($_POST['lat']);
    
    $lng = htmlspecialchars($_POST['lng']);
    
    $type = htmlspecialchars($_POST['type']);
    
    
if($required === $entered)
{





//insert into Table
{
$insert_SQL  = "INSERT INTO tInfo ( ";
$insert_SQL .= "ID, ";
$insert_SQL .= "FirstName, ";
$insert_SQL .= "LastName, ";
$insert_SQL .= "MailID, ";
$insert_SQL .= "Address, ";
$insert_SQL .= "Pass, ";
$insert_SQL .= "lat, ";
$insert_SQL .= "lng, ";
$insert_SQL .= "Type ,";
$insert_SQL .= "Gender ) ";



$insert_SQL .= "VALUES ";


$insert_SQL  .= "( ";
$insert_SQL .= "'', ";
$insert_SQL .= "'$firstname', ";
$insert_SQL .= "'$lastname', ";
$insert_SQL .= "'$email', ";
$insert_SQL .= "'$address', ";
$insert_SQL .= "'$conpass', ";
$insert_SQL .= "'$lat', ";
$insert_SQL .= "'$lng', ";
$insert_SQL .= "'$type' , ";
$insert_SQL .= " '$gender') ";



if(mysqli_query($dbConnected, $insert_SQL))
{
//redirect: "SignedIn.html"
//echo "INSERT SQL messDB - SUCCESSFUL";
header("Location: SignedIn.html");

}
else
{
echo "INSERT SQL messDB - FAILED";

}
}

}

else
{
echo "Please enter correct Captcha";
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
if(empty($_POST['address']))
{
echo "Address not set<br /><br />";
}
if(empty($_POST['password']))
{
echo "Password not set<br /><br />";
}

if(empty($_POST['gender']))
{
echo "Gender not set<br /><br />";
}
if(empty($_POST['lat']))
{
echo "Latitude not set<br /><br />";
}
if(empty($_POST['lng']))
{
echo "Longitude not set<br /><br />";
}
if(empty($_POST['type']))
{
echo "Type not set<br /><br />";
}

}







}

?>

