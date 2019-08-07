	<?php
	$con = mysqli_connect("localhost","root","","kaushikdata");
	 if (isset($_GET["sub"])) {
	 	$name=$_GET["name"];
	 	$email=$_GET["email"];
	 	$ps=$_GET["ps"];

	 	mysqli_query($con, "insert into mytable(Name,Email,Password) values('".$name."','".$email."','".$ps."')");
	 	header("location:select.php");
	 }
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>My Site</title>
	</head>
	<body>
		<form method="get">
			Name: <input type="text" name="name"><br>
			Email: <input type="Email" name="email"><br>
			Password: <input type="Password" name="ps"><br>
			<input type="Submit" name="sub" value="Sigh Up">

		</form>

	</body>
	</html>