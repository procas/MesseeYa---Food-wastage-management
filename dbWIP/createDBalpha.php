
<?php
/**
* File name: createDBalpha.php
* Created by: Proma Mukherjee
* Dated: 08-09-2017
==================================
**/
//$hostname = "localhost";
$hostname = "localhost";

$username = "root";

$password= "";

$dbConnected = mysqli_connect($hostname, $username, $password);

//$dbSelected = mysqli_select_db($dbConnected, $databaseName);

$dbSuccess = true;

if($dbConnected)
{
	echo "<br /><br />MySQL Connected Ok<br /><br />";

}		else {
			echo "MySQL connection FAILED<br /><br />";
			$dbSuccess = false;
			}


if($dbSuccess)
{
	
$databaseName = "testDB";

$createSQL = "CREATE DATABASE ".$databaseName;
if(mysqli_query($dbConnected, $createSQL))
{
		echo "'Create DATABASE ".$databaseName."'- Successful.";
		
		}
		else {
			echo "'Create DATABASE ".$databaseName."'- Failed.";
	}

}
?>