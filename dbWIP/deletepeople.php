<?php 
/**

* File name: deletepeople.php
* Created by: Proma Mukherjee
* Date: 08-09-2017

**********************************************************

* This file deletes people with last name 'Bloggs' from tPerson table of alphacrm database

**/

{
$hostname = "localhost";

$username = "root";

$password= "";

$dbConnected = mysqli_connect($hostname, $username, $password);

$dbSuccess = true;

if($dbConnected)
{
	echo "<br /><br />MySQL Connected Ok<br /><br />";

}		else {
			echo "MySQL connection FAILED<br /><br />";
			$dbSuccess = false;
			}
}

if($dbSuccess)
{
	
	$people_SQLdelete = "DELETE FROM tPerson WHERE LastName ('Bloggs') ";
	
	if(mysqli_query($dbConnected, $people_SQLdelete))
	{
		echo "DELETE tPerson - SUCCESSFUL<br /><br />";
		
		}
		else {
			
			echo "DELETE tPerson - FAILED<br /><br />";
			}
	
	
	}


?>