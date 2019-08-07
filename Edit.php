<?php
	$con=mysqli_connect("localhost","root","","kaushikdata");
	$r = mysqli_query($con,"SELECT * FROM mytable where ID = '".$_GET['id']."'");
	$record = mysqli_fetch_assoc($r);

	if (isset($_GET['sub'])) {

		$name=$_GET['name']; 
		$email=$_GET['email'];
		$ps=$_GET['ps'];
		$up = mysqli_query($con,"Update mytable set Name ='".$name."', Email ='".$email."', Password='".$ps."' where ID='".$_GET['id']."' ");
		//echo $up;
		header("location: select.php");
	}
?>




<html>
<head>
	<title>My Site</title>
</head>
<body>
	<form method="get">
		Name: <input type="text" name="name" value="<?php echo $record['Name']; ?>"><br>
		Email: <input type="email" name="email" value="<?php echo $record['Email']; ?>"><br>
		Password: <input type="Password" name="ps" value="<?php echo $record['Password']; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $record['ID']; ?>">
		<input type="Submit" name="sub" value="Update">

	</form>

</body>
</html>