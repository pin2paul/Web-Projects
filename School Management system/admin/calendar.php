<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Bijoypur High School</title>
	<link rel="stylesheet" href="../calendar/calendar.css" />
	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="../jQuery/jquery-ui.min.css" />
	<script src="../jQuery/jquery.js" ></script>
	<script src="../jQuery/jquery-ui.js" ></script>
	<script src="../js/script.js" ></script>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>	
	<section class="main_body">
		<header class="header">
			<?php include('header.php'); ?>
		</header>
		<?php include('../calendar/calendar.php');?>
		<div style="clear:both;margin-top:45px"></div>
		<?php include('footer.php'); ?>
	</section>
	
</body>
<script src="../calendar/jquery.min.js"></script>
<script src="../calendar/calendar.js"></script>
<script>
var cal = CALENDAR();
cal.init();
</script>
</html>
