<?php
	include('connection/connect.php');
	$sqlData = "select * from news_update";
	$result = mysqli_fetch_assoc(mysqli_query($conn,$sqlData));
	$news = $result['news'];
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bijoypur High School</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="jQuery/jquery-ui.min.css" />
	<script src="jQuery/jquery.js" ></script>
	<script src="jQuery/jquery-ui.js" ></script>
	<script src="js/script.js" ></script>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body onload="starTime();">
	<section class="main_body">
		<header class="header">
			<?php include ('header.php')?>
			<div class="banner">
				<div class="carousel slide" id="myCarousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/22.png" alt="">						   
						</div>
						<div class="item">
							<img src="images/11.jpg" alt="">			
						</div>
						<div class="item">
							<img src="images/33.jpg" alt="">			
						</div>
						<div class="item">
							<img src="images/44.jpg" alt="">			
						</div>
						<div class="item">
							<img src="images/55.jpg" alt="">			
						</div>
					</div>
					<a data-slide="prev" href="#myCarousel" class="carousel-control left"></a>
					<a data-slide="next" href="#myCarousel" class="carousel-control right"></a>
				</div>
            </div> 
		</header>
		<section class="main_content">
			<div class="latest_news">
				<div class="_update"><b><span id="_update">News Update</b></span></div>
				<div class="news_scroll">
					<marquee behavior="scroll" direction="left" OnMouseOver="this.stop()"OnMouseOut="this.start()">
						<?php echo $news ?>
					</marquee>
				 </div>
			</div>
			<div class="content_left">
				<h3 style="text-align:center;padding-bottom:10px">Notice Board</h3>
				<ul>
					<?php
						$sqlNotice = "select * from notice order by notice_id desc";
						$notice = mysqli_query($conn,$sqlNotice);
						$i=0;
						while($row = mysqli_fetch_assoc($notice)){	
							$i++;
					?>
						<li><a href="notices/<?php echo $row['file']; ?>" target="_blank"><?php echo $row['title'] ?></a></li>
					<?php 
					if($i>5)
						break;
					} ?>
				</ul>
			</div>
			<div class="content_mid">
				<h3 style="text-align:center;padding-bottom:10px">Mission</h3>
				<p>Here The Mission of the school will be published.</p>
			</div>
			<div class="content_right">
				<h3 style="text-align:center;padding-bottom:10px">Important Links</h3>
				<ul>
					<li><a href="http://www.educationboardresults.gov.bd" target="_blank">Education board result</a></li>
					<li><a href="http://www.dshe.gov.bd/" target="_blank">Directorate of Secondary and Higher Education </a></li>
					<li><a href="http://comillaboard.portal.gov.bd/ " target="_blank">Comilla Education Board</a></li>
					<li><a href="http://www.moedu.gov.bd/" target="_blank">Ministry of Education</a></li>
					<li><a href="http://www.nctb.gov.bd/" target="_blank">National Curriculum and textbook Board</a></li>
					<li><a href="https://www.teachers.gov.bd/" target="_blank">Teachers Portal</a></li>
				</ul>
			</div>
		</section>
		
		<?php include ('footer.php')?>
		
		<script src="js/jquery-1.9.1.js"></script> 
		<script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<script>
			$('#myCarousel').carousel({
				interval: 3000
			});
		</script>
	</section>
</body>
</html>