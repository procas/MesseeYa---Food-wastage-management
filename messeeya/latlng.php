<html>

<?php


$hostname = "localhost";

$username = "root";

$password= "";

$databaseName = "testDB";

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

if(isset($_POST['name']) && isset($_POST['lat']) && isset($_POST['lng']) )
{
$name = htmlspecialchars($_POST['name']);
$lat = htmlspecialchars($_POST['lat']);
$lng = htmlspecialchars($_POST['lng']);


   $insert_pos = "INSERT INTO tLatLng ( ";
  // $insert_pos .= "(";
   $insert_pos .= "ID, ";
   $insert_pos .= "Name, ";
   $insert_pos .= "Lat, ";
   $insert_pos .= "Lng ) ";
   
   $insert_pos .= "VALUES";
   
   
   $insert_pos .= "(";
   $insert_pos .= "'', ";
   $insert_pos .= "'$name', ";
   $insert_pos .= "'$lat', ";
   $insert_pos .= "'$lng' ) ";
   
   
   if(mysqli_query($dbConnected, $insert_pos))
   echo "SUCCESSSFULLY INSERTED.";
   else
   echo "INSERTION FAILED.";

}

if(empty($_POST['lat']))
echo "Lat empty<br />";
if(empty($_POST['lng']))
echo "Lng empty<br />";
if(empty($_POST['name']))
echo "Name empty";

}




?>
</html>