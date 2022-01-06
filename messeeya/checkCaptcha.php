<?php

session_start();

$required = $_SESSION['security_code'];

$str = "re-enter captcha";

//$_SESSION['wrong'] = $str;

if(isset($_POST['captcha']))
{
$entered = $_POST['captcha'];

//$required = $_SESSION['security_code'];

if($required === $entered)
{
header("Location: submitted.php");
}
else
{
header("Location: greetings.php");
//session_start();
echo "Error in Captcha";
}

}
else
{
header("Location: greetings.php");
echo "Please enter Captcha";
//session_start();
//$str = "re-enter captcha";
//if(!empty($_POST['warning'])) $_POST['warning'] = $str;
}



?>