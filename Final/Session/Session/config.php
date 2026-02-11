<?php
$host="localhost"; // Server name
$user="root"; //Username of DB
$pass = ""; //Password if any
$dbnam="Wt_K"; //Database name
//create connection

$conn = new mysqli($host,$user,$pass,$dbnam);
if($conn->connect_error)
{
  die("Connect Error: ". $conn->connect_error);
}

?>