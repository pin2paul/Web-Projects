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
			<table border="2px" class="routine_exam">
				<tr><th colspan="6" style="color:red;font-size:150%">Half Yearly Exam Schedule</th></tr>
				<tr><th colspan="3" style="font-size:120%">10:00-1:00</th><th rowspan="2" style="font-size:120%">Date</th><th colspan="2" style="font-size:120%">1:30-4:30</th></tr>
				<tr>
					<th>Six</th><th>eight</th><th>Ten</th><th>Seven</th><th>Nine</th>
				</tr>
				<tr>
					<td>Bengali 1st</td><td>Bengali 1st</td><td>Bengali 1st</td><td>17-06-2018<br>Sunday</td><td>Bengali 1st</td><td>Bengali 1st</td>
				</tr>
				<tr>
					<td>Bengali 2nd</td><td>Bengali 2nd</td><td>Bengali 2nd</td><td>18-06-2018<br>Monday</td><td>Bengali 2nd</td><td>Bengali 2nd</td>
				</tr>
				<tr>
					<td>English 1st</td><td>English 1st</td><td>English 1st</td><td>19-06-2018<br>Tuesday</td><td>English 1st</td><td>English 1st</td>
				</tr>
				<tr>
					<td>English 2nd</td><td>English 2nd</td><td>English 2nd</td><td>20-06-2018<br>Wednesday</td><td>English 2nd</td><td>English 2nd</td>
				</tr>
				<tr>
					<td>ICT</td><td>ICT</td><td>ICT</td><td>21-06-2018<br>Thursday</td><td>ICT</td><td>ICT</td>
				</tr>
				<tr>
					<td>Mathematics</td><td>Mathematics</td><td>Mathematics</td><td>23-06-2018<br>Saturday</td><td>Mathematics</td><td>Mathematics</td>
				</tr>
				<tr>
					<td rowspan="2">BDGS</td><td rowspan="2">General Science</td><td>BDGS</td><td rowspan="2">24-06-2018<br>Sunday</td><td rowspan="2">General Science</td><td>BDGS</td>
				</tr>
				<tr><td>General Science</td><td>General Science</td></tr>
				<tr>
					<td>General Science</td><td>BDGS</td><td>Religion</td><td>25-06-2018<br>Monday</td><td>BDGS</td><td>Religion</td>
				</tr>
				<tr>
					<td rowspan="3">Religion</td><td rowspan="3">Religion</td><td>Physics</td><td rowspan="3">26-06-2018<br>Tuesday</td><td rowspan="3">Religion</td><td>Physics</td>
				</tr>
				<tr><td>Accounting</td><td>Accounting</td></tr>
				<tr><td>History</td><td>History</td></tr>
				<tr>
					<td rowspan="3">Agriculture Study</td><td rowspan="3">Agriculture Study</td><td>Chemistry</td><td rowspan="3">27-06-2018<br>Wednesday</td><td rowspan="3">Agriculture Study</td><td>Chemistry</td>
				</tr>
				<tr><td>Business Entrepreneurship</td><td>Business Entrepreneurship</td></tr>
				<tr><td>Civics</td><td>Civics</td></tr>
				<tr>
					<td rowspan="3">Physical Study</td><td rowspan="3">Physical Study</td><td>Biology</td><td rowspan="3">28-06-2018<br>Thursday</td><td rowspan="3">Physical Study</td><td>Biology</td>
				</tr>
				<tr><td>Finance & Banking</td><td>Finance & Banking</td></tr>
				<tr><td>Geography</td><td>Geography</td></tr>
				<tr>
					<td rowspan="2">Arts & Crafts</td><td rowspan="2">Arts & Crafts</td><td>Higher Math</td><td rowspan="2">30-06-2018<br>Saturday</td><td rowspan="2">Arts & Crafts</td><td>Higher Math</td>
				</tr>
				<tr><td>Agriculture Study</td><td>Agriculture Study</td></tr>
				
			</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="../js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>