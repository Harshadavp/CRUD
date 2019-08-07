<?php
	$con=mysqli_connect("localhost","root","","kaushikdata");
	$ref=mysqli_query($con,"SELECT * FROM mytable");
?>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr> 
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		while ($result=mysqli_fetch_assoc($ref)) {
			echo "<tr>

				<td>".$result['ID']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Email']."</td>
				<td>".$result['Password']."</td>
				<td> <a href = 'Edit.php?id= ".$result['ID']."'>Edit </a></td>
				<td> <a href = 'Delete.php?id= ".$result['ID']."'>Delete </a></td>
			</tr>";
		}
	?>
	</table>
</body>
</html>