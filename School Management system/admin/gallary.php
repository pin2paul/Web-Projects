<?php	
	session_start();
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
	include('../connection/connect.php');
	$sqlData = "select * from gallary";
	$result = mysqli_query($conn,$sqlData);
	
	if(isset($_POST['upload'])){
		$image_title = $_POST['image_title'];
		
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
		$folder="../images/";
 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		move_uploaded_file($file_loc,$folder.$final_file);
		$sql = "insert into gallary (image_title,file) values('$image_title','$final_file')";
		mysqli_query($conn,$sql);
		header('location: gallary.php');
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
				<form action="" method="post" enctype="multipart/form-data">
					<table class="teacher_details" width="900" height="150" border="2px" >
						<tr><th colspan="4" align="center">Upload Photos</th></tr>
						<tr><th width="60%">Title</th><th>File</th><th>Action</th></tr>
						<tr><td><input type="text" name="image_title" style="width:100%;height:25px" required/></td><td><input type="file" name="image" required/></td><td><input type="submit" value="Upload" name="upload" /></td></tr>
					</table>
				</form>
				<table class="teacher_details" width="900" height="150" border="2px" >
				<tr>
				<?php
					$i=0;
					while($row = mysqli_fetch_assoc($result)){	
						$i++;
						if($i%4==0){
							echo "</tr><tr>";
						}
				?>
					<td align="center"><img src="../images/<?php echo $row['file']; ?>" height="200" width="200"/><br /><a href="delete_image.php?delete=<?php echo $row['image_id']; ?>">Delete</a></td>
				<?php } 
					echo "</tr>";
				?>
				</table>
		</section>
		<div style="clear:both;margin-top:25px"></div>
		<?php include('footer.php'); ?>
		<script src="../js/jquery-1.9.1.js"></script> 
	</section>
</body>
</html>