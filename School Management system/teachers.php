<?php	
	include('connection/connect.php');
	$sqlData = "select * from teachers";
	$result = mysqli_query($conn,$sqlData);
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
<body>
	<section class="main_body">
		<header class="header">
			<?php include ('header.php')?>
		</header>
		<section style="margin-top:100px;">
			<table class="teacher_details" width="900" height="150" border="2px" >
			<tr><th colspan="3" align="center" style="font-size:150%;height:30px;color:blue">Present Teachers Details</th></tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){		
			?>
				<tr><td width="35%"><b>Name</b></td><td width="35%"><h2><?php echo $row['teacher_name'];?></h2></td>
				<td width="30%" class="teacher_image" rowspan="4" colspan="4" align="center"><img src="images/<?php echo $row['image']; ?>" height="200" width="200"/></td></tr>
				<tr><td><b>Designation</b></td><td><h1><?php echo $row['designation'];?></h1></td></tr>
				<tr><td><b>Qualification</b></td><td><h3><?php echo $row['qualification'];?></h3></td></tr>
				<tr><td><b>Join Date</b></td><td><h4><?php echo $row['join_date'];?></h4></td></tr>
				<tr><td colspan="3"></td></tr>
				<?php } ?>
			</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>