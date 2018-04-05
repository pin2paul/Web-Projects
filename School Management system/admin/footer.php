<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
?>
<footer class="footer">
	<div class="footer_top">
		<div class="footer_top_left">
			<h3>Important Links</h3>
			<ul>
				<li><a href="http://www.educationboardresults.gov.bd" target="_blank">Education board result</a></li>
				<li><a href="http://www.dshe.gov.bd/" target="_blank">Directorate of Secondary and Higher Education </a></li>
				<li><a href="http://comillaboard.portal.gov.bd/ " target="_blank">Comilla Education Board</a></li>
				<li><a href="http://www.moedu.gov.bd/" target="_blank">Ministry of Education</a></li>
				<li><a href="http://www.nctb.gov.bd/" target="_blank">National Curriculum and textbook Board</a></li>
				<li><a href="https://www.teachers.gov.bd/" target="_blank">Teachers Portal</a></li>
			</ul>
		</div>
		<div class="footer_top_mid">
			<h3>About Us</h3>
			<ul>
				<li><a href="history.php">History</a></li>
				<li><a href="mission.php">Mission</a></li>
				<li><a href="vision.php">Vision</a></li>
			</ul>
		</div>
		<div class="footer_top_right">
		<h3>Academic</h3>
			<ul>
				<li><a href="routine.php">Routine</a></li>
				<li><a href="exam_schedule.php">Exam Schedule</a></li>
				<li><a href="calendar.php">Academic Calendar</a></li>
				<li><a href="gallary.php">Gallary</a></li>
			</ul>
		</div>
	</div>
	<div class="footer_bootom">
		<a><a href="about_me.php" style="color:white">&copy; pintu@ict 2018</a></p>
	</div>
</footer>