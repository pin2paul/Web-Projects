<?php		
	include('connection/connect.php');
	$sqlData = "select * from gallary order by image_id desc";
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
			<table class="teacher_details" width="960" height="150" border="2px" >
				<tr>
				<?php
					$i=0;
					while($row = mysqli_fetch_assoc($result)){	
						$i++;
						if($i%4==0){
							echo "</tr><tr>";
						}
				?>
					<td align="center"><img src="images/<?php echo $row['file']; ?>" height="200" width="200"/><br /><span><?php echo $row['image_title']; ?></span></td>
				<?php } 
					echo "</tr>";
				?>
				</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>