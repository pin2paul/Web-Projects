<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
	$Id=$_GET['delete'];
	$sql = "delete from gallary where image_id='$Id'";
	mysqli_query ($conn,$sql);
	header('location: gallary.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>