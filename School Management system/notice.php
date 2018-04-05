<?php	
	include('connection/connect.php');
	$sqlData = "select * from notice";
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
				<tr><th>Notice Id</th><th>Notice Title</th><th>Notice Size(KB)</th><th>Action</th></tr>
				<?php
					while($row = mysqli_fetch_array($result)){		
				?>
					<tr>
					<td align="center"><?php echo $row['notice_id'];?></td>
					<td><?php echo $row['title']; ?></td>
					<td align="center"><?php echo $row['size']; ?></td>
					<td align="center"><a href="notices/<?php echo $row['file']; ?>" target="_blank">Download</a></td>
					</tr>
				<?php } ?>
				</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>