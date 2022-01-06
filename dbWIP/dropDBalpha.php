<?php

/*

* File Name: dropDBalpha.php
* Created by: Proma Mukherjee
* date: 07-09-2017
=============================

This script drops the database system

*/

$hostname = "localhost";

$username = "root";

$password= "";

$databaseName = "alphacrm";

$dbConnected = mysqli_connect($hostname, $username, $password, $databaseName, null);

$dbSelected = mysqli_select_db($dbConnected, $databaseName);

$dbSuccess = true;

if($dbConnected)
{
	echo "<br /><br />MySQL Connected Ok<br /><br />";
if($dbSelected)
{
	echo "DB Connected Ok<br /><br />";
	
	}else {
		echo "DB Connection FAILED<br /><br />";
		}
}		else {
			echo "MySQL connection FAILED<br /><br />";
			$dbSuccess = false;
			}


if($dbSuccess)
{
$dbName = "alphacrm";
$dropSQL = "DROP DATABASE ".$dbName;
if(mysqli_query($dbConnected, $dropSQL))
{
		echo "'DROP DATABASE ".$dbName."'- Successful.";
		
		}
		else {
			echo "'DROP DATABASE ".$dbName."'- Failed.";
	}

}



?>