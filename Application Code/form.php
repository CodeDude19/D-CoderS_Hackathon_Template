<!DOCTYPE html>
<html>
<head>
	<title>php form</title>
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
    </ul>
  </div>
</nav>

	<form action ='ac.php' method="post">
		name: <input type="text" name="nm"><br>
		email:<input type="text" name="em"><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>