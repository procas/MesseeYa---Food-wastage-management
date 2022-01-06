<?php
session_start();
$cookie_name=htmlspecialchars($_POST['first_name']);
$cookie_password="dayal";
setcookie($cookie_name, $cookie_password, time() + (86400 * 30));
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "password is: " . $_COOKIE[$cookie_name];
}
?>
