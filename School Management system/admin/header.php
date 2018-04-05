<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
?>
<div class="header_top">
	<div class="header_left">
		<img src="../images/logo_b.png" width="100" height="100" alt="logo" />
	</div>
	<div class="header_name">
		<h1>Bijoypur High School</h1>
		<p>Sadar South, Comilla<br>
		Contact: +8801753935629</p>
	</div>
	<div class="header_right">
		<ul><li><a href="logout.php">Admin Logout</a></li></ul>
		<a href="https://www.facebook.com" target="_blank"><img src="../images/fb.png" alt="facebook" /></a>
		<a href="https://www.twiter.com" target="_blank"><img src="../images/twit.png" alt="twiter" /></a>
		<a href="https://www.google.com" target="_blank"><img src="../images/gplus.png" alt="linkedin" /></a><br />
		<div id="digital_clock"></div>
		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				var h = (today.getHours()==0)? 12:today.getHours() > 12 ? today.getHours() - 12 : today.getHours();
				var am_pm = today.getHours() >= 12 ? "PM" : "AM";
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('digital_clock').innerHTML =
				h + ":" + m + ":" + s + " "+am_pm;
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};
					return i;
			}
			setInterval(startTime,1000);
		</script>

	</div>
</div>
<div id="cssmenu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li class="has-sub"><a href="#">About</a>
			<ul>
				<li><a href="history.php">History</a></li>
				<li><a href="mission.php">Mission</a></li>
				<li><a href="vision.php">Vision</a></li>
			</ul>
		</li>
		<li><a href="teachers.php">Teachers</a></li>
		<li><a href="notice.php">Notice</a></li>
		<li class="has-sub"><a href="#">Academic</a>
			<ul>
				<li><a href="routine.php">Routine</a></li>
				<li><a href="exam_schedule.php">Exam Schedule</a></li>
				<li><a href="calendar.php">Academic Calendar</a></li>
			</ul>
		</li>
		<li><a href="gallary.php">Gallary</a></li>
		<li><a href="admission.php">Admission Form</a></li>
	</ul>
</div>