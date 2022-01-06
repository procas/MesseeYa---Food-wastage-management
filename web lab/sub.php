<?php
session_start();
//connect to db
{
    $hname="localhost";
    $uname="root";
    $dbname="myDB";
    $pwd="";

    $dbConnected=mysqli_connect($hname, $uname, $pwd, $dbname);
    $dbSelected=mysqli_select_db($dbConnected, $dbname);
    $dbSuccess=true;
}
if($dbConnected)
{
    if($dbSelected)
    {
        $dbSuccess=true;
    }
    else

    $dbSuccess=false;
}
if($dbSuccess)
{
    $name=htmlspecialchars($_POST['fname']);
    $email=htmlspecialchars($_POST['email']);

    //insert
    {
        $insert_SQL="INSERT INTO Info(FName, Email) ";
        $insert_SQL.=" VALUES ('$name', '$email')";
        
        if(mysqli_query($dbConnected, $insert_SQL))
        echo "Insert Successful";
        else echo "Insert Unsuccessful";
    }
}
?>