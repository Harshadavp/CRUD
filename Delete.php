<?php
$con = mysqli_connect("localhost","root","","kaushikdata");
$ref = mysqli_query($con,"DELETE FROM mytable WHERE ID = '".$_GET['id']."'");

header("location: select.php");
?>