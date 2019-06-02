<?php 
session_start();
echo "Logout Successfully!";
session_destroy();
header("Location: login.php");
    $username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
 { 
 	setcookie('username', '', time()-60*60*24, '/');
    setcookie('password','',time()-60*60*24,'/');
    header("Location: login.php");
}