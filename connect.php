<?php


$host="localhost:3306";
$username = "root";
$pwd = "";
$database="hiker";

$conn = mysqli_connect($host,$username,$pwd,$database);

if(!$conn)
	die(mysqli_connect_error());
else
{
  // echo "connected </br>";
	mysqli_select_db($conn,$database);
}

///session_start();
 //$_SESSION['conn'] =$conn ;


?>
