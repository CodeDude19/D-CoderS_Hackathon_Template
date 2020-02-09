<!DOCTYPE html>
<html>
<head>
	<title>Upcoming</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="reult.css">
	<style type="text/css">
		*{
			text-align: center;
	}
	body{
		background-color: #1b262c;
	}
	h1{
		padding-top: 5%;
		padding-left: 1%;
		font-family: "calibri";
		color: #bbe1fa;
	}
	.table{
		margin: 2%;

	}
	</style>
</head>
<body>


<!-- NavBar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">placeMate.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="company.html">Companies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginForm.php">Login</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Placement Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ongoing_display.php">Ongoing Companies</a>
          <a class="dropdown-item" href="upcoming_display.php">Upcoming Companies</a>
          <a class="dropdown-item" href="pervious_display.php">Previous Companies</a>
      </li>
    </ul>
  </div>
</nav>





<h1>Upcoming Companies </h1>

<br>
<div class="table table-striped table-dark">

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli('localhost','root','','upcoming');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT c_id,company_name,start_date,end_date FROM companies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table border='1'>

			<tr>

			<th>Id</th>

			<th>Start Date</th>

			<th>End Date</th>

			<th>Company Name</th>

			</tr>";

			 

			while($row = mysqli_fetch_array($result))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['c_id'] . "</td>";

			  echo "<td>" . $row['start_date'] . "</td>";

			  echo "<td>" . $row['end_date'] . "</td>";

			  echo "<td>" . $row['company_name'] . "</td>";

			  echo "</tr>";

			  }

		echo "</table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>












<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


