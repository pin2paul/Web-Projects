<?php	
	session_start();
	if($_SESSION['authuser'] != 1){
		header('location: ../login.php');
		exit();
	}	
	include('../connection/connect.php');
	$sqlData = "select * from notice";
	$result = mysqli_query($conn,$sqlData);
	
	if(isset($_POST['upload'])){
		$notice_title = $_POST['notice_title'];
		
		$file = $_FILES['notice']['name'];
		$file_loc = $_FILES['notice']['tmp_name'];
		$file_size = $_FILES['notice']['size'];
		$folder="../notices/";

		$new_size = $file_size/1024;  
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		move_uploaded_file($file_loc,$folder.$final_file);
		$sql = "insert into notice (title,file,size) values('$notice_title','$final_file',$new_size)";
		mysqli_query($conn,$sql);
		header('location: notice.php');
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
						<tr><th colspan="4" align="center">Upload Files</th></tr>
						<tr><th colspan="2" width="60%">Title</th><th>File</th><th>Action</th></tr>
						<tr><td colspan="2"><input type="text" name="notice_title" style="width:100%;height:25px" required/></td><td><input type="file" name="notice" required/></td><td><input type="submit" value="Upload" name="upload" /></td></tr>
					</table>
				</form>
				<table class="teacher_details" width="900" height="150" border="2px" >
				<tr><th>Notice Id</th><th>Notice Title</th><th>Notice Size(KB)</th><th>Action</th></tr>
				<?php
					while($row = mysqli_fetch_assoc($result)){		
				?>
					<tr>
					<td align="center"><?php echo $row['notice_id'];?></td>
					<td><?php echo $row['title']; ?></td>
					<td align="center"><?php echo $row['size']; ?></td>
					<td align="center"><a href="delete_notice.php?delete=<?php echo $row['notice_id']; ?>">Delete</a></td>
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