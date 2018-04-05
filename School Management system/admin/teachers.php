<?php	
	session_start();
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
	include('../connection/connect.php');
	$sqlData = "select * from teachers";
	$result = mysqli_query($conn,$sqlData);
	
	if(isset($_POST['addTeacher'])){
		$teacher_name = $_POST['teacher_name'];
		$designation = $_POST['designation'];
		$qualification = $_POST['qualification'];
		$join_date = $_POST['join_date'];
		$path1 = $_FILES['image_f']['name'];
		move_uploaded_file($_FILES['image_f']['tmp_name'],"../images/".$path1);
		$sql = "insert into teachers (teacher_name,designation,qualification,image,join_date) values('$teacher_name','$designation','$qualification','$path1','$join_date')";
		mysqli_query($conn,$sql);
		header('location: teachers.php');
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
			<table>
				<tr><th colspan="4" align="centar" style="font-size:150%; height:30px; color:blue;">Add New Teacher</th></tr>
				<tr><td>
				<form action="" method="post" enctype="multipart/form-data">
					<table class="teacher_details" width="900" height="150" border="2px" >
						<tr><td width="40%"><b>Name</b></td>
						<td width="40%"><h2><input type="text" name="teacher_name"style="width:100%;height:25px" required/></h2></td>
						<td width="30%" class="teacher_image" rowspan="4" colspan="4" align="center"><input type="file" name="image_f" required/></td>
						<td width="15%" rowspan="4" colspan="4"><input type="submit" name="addTeacher" value="Add Teacher"/></td></tr>
						<tr><td><b>Designation</b></td><td><h1><input type="text" name="designation"style="width:100%;height:25px" required/></h1></td></tr>
						<tr><td><b>Qualification</b></td><td><h3><input type="text" name="qualification"style="width:100%;height:25px" required/></h3></td></tr>
						<tr><td><b>Join Date</b></td><td><h4><input type="text" name="join_date"style="width:100%;height:25px" required/></h4></td></tr>
					</table>
				</form>
				</td></tr>
				<tr><th colspan="4" align="center" style="font-size:150%; height:30px; color:blue;">Present Teachers DetailS</th></tr>
				<tr><td>
				<?php
					while($row = mysqli_fetch_assoc($result)){		
				?>
					<table class="teacher_details" width="900" height="150" border="2px" >
						<tr><td width="35%"><b>Name</b></td><td width="35%"><h2><?php echo $row['teacher_name'];?></h2></td>
						<td width="30%" class="teacher_image" rowspan="4" colspan="4" align="center"><img src="../images/<?php echo $row['image']; ?>" height="200" width="200"/></td>
						<td width="15%" rowspan="4" colspan="4"><a href="delete_teacher.php?delete=<?php echo $row['teachers_id'];?>">Delete</a></td></tr>
						<tr><td><b>Designation</b></td><td><h1><?php echo $row['designation'];?></h1></td></tr>
						<tr><td><b>Qualification</b></td><td><h3><?php echo $row['qualification'];?></h3></td></tr>
						<tr><td><b>Join Date</b></td><td><h4><?php echo $row['join_date'];?></h4></td></tr>
					</table>
				</td></tr>
					<?php } ?>
				</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="../js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>