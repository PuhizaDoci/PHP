<?php
class MySQLException extends Exception {}

define ("host","localhost");
define("user","root");
define ("pass","puhiza890");
define ("name","projektiphp");
try{
$connect = mysqli_connect(host,user,pass,name);
}catch(MySQLException $e)
{
die("Cannot connect with database!");
}
?>
