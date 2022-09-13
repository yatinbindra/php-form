<?php
$server="localhost";
$db_userid="root";
$db_password="";
$database="test";
$con=mysqli_connect($server,$db_userid,$db_password,$database);
echo" server";
if(!$con)
echo "server connection error";

?>