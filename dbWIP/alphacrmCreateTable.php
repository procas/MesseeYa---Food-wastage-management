<?php
/**

* File name: alphacrmCreateTable.php
* Created by: Proma Mukherjee
* Date: 08-09-2017

* This file creates tables tCompany and tPerson for the database alphacrm

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
	// SQL script to create table tCompany
	
	$createCoyTable_SQL = "CREATE TABLE alphacrm.tCompany ( ";
	
	$createCoyTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
  $createCoyTable_SQL .= "preName VARCHAR( 50 ) , ";
  $createCoyTable_SQL .= "Name VARCHAR( 50 ) NOT NULL, ";
  $createCoyTable_SQL .= "RegType VARCHAR( 50 ) NULL, ";
  
  $createCoyTable_SQL .= "StreetA VARCHAR( 150 )  NULL, ";
  $createCoyTable_SQL .= "StreetB VARCHAR( 150 )  NULL, ";
  $createCoyTable_SQL .= "StreetC VARCHAR( 150 )  NULL, ";
  $createCoyTable_SQL .= "Town VARCHAR( 150 )  NULL, ";
  //$createCoyTable_SQL .= "Country VARCHAR( 150 ) NULL, ";
  $createCoyTable_SQL .= "PostCode VARCHAR( 50 ) NULL, ";
  
  
  $createCoyTable_SQL .= "COUNTRY VARCHAR( 250 ) NOT NULL ) ";

  
  if(mysqli_query($dbConnected, $createCoyTable_SQL)){
  	echo "'Create TABLE tCompany'- Successful.<br /><br />";
  	}
  	else {
  		
  		echo "'Create TABLE tCompany'- Failed.<br /><br />";
  		}
  		
  		// Script to create table tPerson 
  		
  		$createPersonTable_SQL = "CREATE TABLE alphacrm.tPerson ( ";
  		$createPersonTable_SQL .= "PersonID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
  		$createPersonTable_SQL .= "Salutation VARCHAR( 20 ) , ";
  		//$createPersonTable_SQL .= "Salutation VARCHAR( 20 ) , ";
    $createPersonTable_SQL .= "FirstName VARCHAR( 50 ) , ";
    $createPersonTable_SQL .= "LastName VARCHAR( 50 ) , ";
    $createPersonTable_SQL .= "CompanyID INT( 11 ) NOT NULL ) ";
    
    if(mysqli_query($dbConnected, $createPersonTable_SQL))
    {
    	echo "'Create TABLE tPerson'- Successful.<br /><br />";
    	}
    	else {
    		
    		echo "'Create TABLE tPerson'- Failed.<br /><br />";

  		}
  		
}



?>