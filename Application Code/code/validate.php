<!-- //connect to database
// ?$con=mysqli_connect("localhost","root","","record");

//to ensure that it is connected -->
<?php
   
   $con = mysqli_connect('localhost','root','','record');
if(!$con)
{
	echo "connection error";
}
//take the info from user
$email=$_POST["email"];
$pass=$_POST["password"];
//select the database to use
// mysqli_select_db("record",$con);
$abc = "SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($con,$abc);
$row=mysqli_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass)
{
	header("location: menu.php");
	exit();
}

else{
	
	echo "Invalid Credentials! ";
	echo "Please Try Again.";

}
?>
</body>
</html>