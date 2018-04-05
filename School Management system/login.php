<?php
	session_unset();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="login.css" />
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
			<?php include('header.php'); ?>
		</header>
		<div id="wrapper">
			<div id="formDiv">
				<form action="admin/index.php" method="POST">
					<label>Admin Name:</label><br>
					<input type="text" name="admin_name" class="inputFields"/><br><br>
					<label>Password:</label><br>
					<input type="password" name="password" class="inputFields" /><br/><br/>
					<input type="submit" name="submit" value="Login" class="theButtons"/>	
				</form>
			</div>
		</div>
	</section>
		
</body>
</html>