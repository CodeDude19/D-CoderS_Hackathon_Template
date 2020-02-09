<?php
$servername="localhost";
$username="root";
$password="";

//creating database connection

$conn=mysqli_connect($servername,$username,$password);

//check connection

if(!$conn)
{
	die("failed");

}
else
{
	echo "connection successful";
}
?>