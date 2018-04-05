<?php
	session_start();
	include('../connection/connect.php');
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
	include('../connection/connect.php');
	$sqlData = "select * from registration";
	$result = mysqli_query($conn,$sqlData);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bijoypur High School</title>
	<link rel="stylesheet" href="../style.css" />
	<script src="../jQuery/jquery.js" ></script>
	<script src="../js/script.js" ></script>
	<link rel="stylesheet" href="../css/styles.css">
	
</head>
<body>
	<section class="main_body">
		<div class="header">
			<?php include ('header.php')?>
		</div>
		<section style="margin-top:100px;">
			<table class="teacher_details" width="900" height="150" border="2px" >
				<tr><th>Registration Id</th><th>Registered Name</th><th colspan="2">Action</th></tr>
				<?php
					while($row = mysqli_fetch_assoc($result)){		
				?>
					<tr align="center">
					<td><?php echo $row['reg_id'];?></td>
					<td><?php echo $row['title']; ?></td>
					<td><a href="../registration/<?php echo $row['file']; ?>" target="_blank">View</a></td>
					<td><a href="delete_reg.php?delete=<?php echo $row['reg_id']; ?>">Delete</a></td>
					</tr>
				<?php } ?>
				</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="../js/jquery-1.9.1.js"></script> 
		
	</section>
</body>
</html>