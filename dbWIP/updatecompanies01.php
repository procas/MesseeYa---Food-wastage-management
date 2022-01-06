<?php
/**

* File name: updatecompanies01.php
* Created by: Proma Mukherjee
* Date: 08-09-2017

* This file updates COUNTRY 'India' to 'United Kingdom' in table tCompany in alphacrm database

**/

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
		$company_SQLupdate = "UPDATE tCompany SET ";
		
		$company_SQLupdate .= "COUNTRY = 'United Kingdom'";
		
		$company_SQLupdate .= "WHERE COUNTRY = 'India'";
		
		if(mysqli_query($dbConnected, $company_SQLupdate))
		{
			echo "UPDATE tCompany.COUNTRY - SUCCESSFUL.<br /><br />";
			}
			else {
				echo "UPDATE tCompany.COUNTRY - FAILED.<br /><br />";
				}
	}
	
	
	
	
	
	
	
	