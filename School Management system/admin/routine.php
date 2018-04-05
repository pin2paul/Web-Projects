<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bijoypur High School</title>
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
			<?php include ('header.php')?>
		</header>
		<section style="margin-top:100px;">
			<table border="2px" class="routine_table">
				<tr><th colspan="8" style="color:red;font-size:150%">Class Six Routine</th></tr>
				<tr>
					<th>Day</th><th>10:00-10:55</th><th>10:55-11:50</th><th>11:50-12:40</th><th>12:40-1:30</th>
					<th rowspan="7">T<br><br>I<br><br>F<br><br>F<br><br>I<br><br>N</th><th>2:30-3:15</th><th>3:15-4:00</th>
				</tr>
				<tr>
					<td>Saturday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Sunday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Monday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Tuesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Wednesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Thursday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
			</table>
			<table border="2px" class="routine_table">
				<tr><th colspan="8" style="color:red;font-size:150%">Class Seven Routine</th></tr>
				<tr>
					<th>Day</th><th>10:00-10:55</th><th>10:55-11:50</th><th>11:50-12:40</th><th>12:40-1:30</th>
					<th rowspan="7">T<br><br>I<br><br>F<br><br>F<br><br>I<br><br>N</th><th>2:30-3:15</th><th>3:15-4:00</th>
				</tr>
				<tr>
					<td>Saturday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Sunday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Monday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Tuesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Wednesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Thursday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
			</table>
			<table border="2px" class="routine_table">
				<tr><th colspan="8" style="color:red;font-size:150%">Class Eight Routine</th></tr>
				<tr>
					<th>Day</th><th>10:00-10:55</th><th>10:55-11:50</th><th>11:50-12:40</th><th>12:40-1:30</th>
					<th rowspan="7">T<br><br>I<br><br>F<br><br>F<br><br>I<br><br>N</th><th>2:30-3:15</th><th>3:15-4:00</th>
				</tr>
				<tr>
					<td>Saturday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Sunday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Monday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Tuesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Wednesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Thursday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
			</table>
			<table border="2px" class="routine_table">
				<tr><th colspan="8" style="color:red;font-size:150%">Class Nine Routine</th></tr>
				<tr>
					<th>Day</th><th>10:00-10:55</th><th>10:55-11:50</th><th>11:50-12:40</th><th>12:40-1:30</th>
					<th rowspan="7">T<br><br>I<br><br>F<br><br>F<br><br>I<br><br>N</th><th>2:30-3:15</th><th>3:15-4:00</th>
				</tr>
				<tr>
					<td>Saturday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Sunday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Monday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Tuesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Wednesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Thursday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
			</table>
			<table border="2px" class="routine_table">
				<tr><th colspan="8" style="color:red;font-size:150%">Class Ten Routine</th></tr>
				<tr>
					<th>Day</th><th>10:00-10:55</th><th>10:55-11:50</th><th>11:50-12:40</th><th>12:40-1:30</th>
					<th rowspan="7">T<br><br>I<br><br>F<br><br>F<br><br>I<br><br>N</th><th>2:30-3:15</th><th>3:15-4:00</th>
				</tr>
				<tr>
					<td>Saturday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Sunday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Monday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Tuesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Wednesday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
				<tr>
					<td>Thursday</td><td>Mathematics</td><td>Bengali 1st</td><td>English 2nd</td><td>Bangladesh & Global Studies</td>
					<td>English 1st</td><td>General Seience</td>
				</tr>
			</table>
			
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="../js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>