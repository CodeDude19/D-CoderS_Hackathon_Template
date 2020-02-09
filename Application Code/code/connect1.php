<?php
$connection = mysqli_connect('localhost','root','','previous');
if(!$connection){
    echo "Connection Error";
}
$id=$_POST['companyID'];
$name=$_POST['companyName'];
$start=$_POST['startDate'];
$end=$_POST['endDate'];
$query="INSERT INTO companies(c_id,company_name,start_date,end_date) VALUES ('$id','$name','$start','$end')";
mysqli_query($connection,$query);
echo "Registration Succesful";

?>