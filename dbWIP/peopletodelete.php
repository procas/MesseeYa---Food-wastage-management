<?php

/**

* File name: peopletodelete.php
* Created by: Proma Mukherjee
* Date: 08-09-2017

* This file create people to delete

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
	
	echo "DataBase Connected<br /><br />";
	
  $person_SQLinsert = "INSERT INTO tPerson ( ";
	$person_SQLinsert .= "PersonID, ";
	$person_SQLinsert .= "Salutation, ";
	$person_SQLinsert .= "FirstName, ";
	$person_SQLinsert .= "LastName, ";
	$person_SQLinsert .= "CompanyID ) ";
	
  
  $person_SQLinsert .= "VALUES ";
  

  //insert person1
 {
  $person_SQLinsert .= "( ";
	$person_SQLinsert .= "'1', ";
	$person_SQLinsert .= " 'Ms', ";
	$person_SQLinsert .= "'Nanny', ";
	$person_SQLinsert .= "'Bloggs', ";
	$person_SQLinsert .= "'6758' ) ";
  }
  
  
 //insert person2
{
  $person_SQLinsert .= "( ";
	$person_SQLinsert .= "'2', ";
	$person_SQLinsert .= " 'Mr', ";
	$person_SQLinsert .= "'James', ";
	$person_SQLinsert .= "'Bloggs', ";
	$person_SQLinsert .= "'8976' ) ";
  }
 
  //insert person 3
  
 {
  $person_SQLinsert .= "( ";
	$person_SQLinsert .= "'3', ";
	$person_SQLinsert .= "'Mrs.', ";
	$person_SQLinsert .= "'Johanne', ";
	$person_SQLinsert .= "'Bloggs', ";
	$person_SQLinsert .= "'9087' ) ";
  }
 //insert person 4
 {  
 
  $person_SQLinsert .= "( ";
	$person_SQLinsert .= "'4', ";
	$person_SQLinsert .= "'Mr.', ";
	$person_SQLinsert .= "'Andrew', ";
	$person_SQLinsert .= "'Millers', ";
	$person_SQLinsert .= "'9076' ) ";
  }
  
  if(mysqli_query($dbConnected, $person_SQLinsert ))
    {
    	echo "'INSERT TABLE tPerson'- Successful.<br /><br />";
    	}
    	else {
    		
    		echo "'INSERT TABLE tPerson'- Failed.<br /><br />";

  		}
  
}

}




?>