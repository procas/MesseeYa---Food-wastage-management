<?php

/**

* File name: insertcompanies01.php
* By: Proma Mukherjee
* Date: 09-09-2017

===========================================

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
	
	$company_SQLinsert = "INSERT INTO tCompany ( ";
	//$company_SQLIinsert .= "ID, ";
	$company_SQLinsert .= "preName, ";
	$company_SQLinsert .= "Name, ";
	$company_SQLinsert .= "RegType, ";
	$company_SQLinsert .= "StreetA, ";
  $company_SQLinsert .= "StreetB, ";
  $company_SQLinsert .= "StreetC, ";
  $company_SQLinsert.= "Town, ";
  $company_SQLinsert .= "PostCode, ";
  $company_SQLinsert .= "COUNTRY ) ";
  
  $company_SQLinsert .= "VALUES ";
  
  
  //insert Holmes
 {
  $company_SQLinsert .= "( ";
	//$company_SQLIinsert .= "ID, ";
	$company_SQLinsert .= "'The', ";
	$company_SQLinsert .= "'Priavte Consulting Detective', ";
	$company_SQLinsert.= "'', ";
  $company_SQLinsert .= "'', ";
 $company_SQLinsert .= "'221-B Baker Street', ";
 $company_SQLinsert .= "'', ";
  $company_SQLinsert .= "'London', ";
  $company_SQLinsert .= "'1220', ";
  $company_SQLinsert .= "'Great Britain' ) ";
  }
  

	//insert MesseeYa 
  {
  $company_SQLinsert .= "( ";
	//$company_SQLIinsert .= "ID, ";
	$company_SQLinsert .= "'The', ";
	$company_SQLinsert .= "'MesseeYa', ";
	$company_SQLinsert.= "'', ";
  $company_SQLinsert .= "'', ";
 $company_SQLinsert .= "'Chennai', ";
 $company_SQLinsert .= "'', ";
  $company_SQLinsert .= "'Kancheepram, SRM Nagar', ";
  $company_SQLinsert .= "'690630', ";
  $company_SQLinsert .= "'India' ) ";
  }
	
	
	// insert New Boston 
	
	
	{
  $company_SQLinsert .= "( ";
	//$company_SQLIinsert .= "ID, ";
	$company_SQLinsert .= "'The', ";
	$company_SQLinsert .= "'New Boston', ";
	$company_SQLinsert.= "'', ";
  $company_SQLinsert .= "'', ";
 $company_SQLinsert .= "'654 California', ";
 $company_SQLinsert .= "'', ";
  $company_SQLinsert .= "'California', ";
  $company_SQLinsert .= "'5647', ";
  $company_SQLinsert .= "'North America' ) ";
  }
	
	
	
	
	
	
	if(mysqli_query($dbConnected, $company_SQLinsert))
	{
		echo "INSERT INTO tCompany - SUCCESSFUL.<br /><br />";
		}
		else {
			echo "INSERT INTO tCompany - FAILED.<br /><br />";
			}
	
	}







?>