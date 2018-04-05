<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bijoypur High School</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="form.css" />
	<script src="jQuery/jquery.js" ></script>
	<script src="js/script.js" ></script>
	<link rel="stylesheet" href="css/styles.css">
	<script type="text/javascript">
		function validateForm(){
			var name = document.form1.txtName;
			var Father_name = document.form1.txtFather;
			var Mother_name = document.form1.txtMother;
			var Guardian_name = document.form1.txtGuardian;
			var address = document.form1.txtAddress;
			var Per_address = document.form1.txtPermanent;
			var mobile = document.form1.txtMobile;
			var Int_class = document.form1.txtIntClass;
			var Pre_school = document.form1.txtPreSchool;
			var Pre_class = document.form1.txtPreClass;
			var Pre_roll = document.form1.txtPreRoll;
			var res=true;
			
			if(name.value == ""){
				name.placeholder= "Enter Your Name";
				res = false;
			}
			if(Father_name.value == ""){
				Father_name.placeholder= "Enter Your Father's Name";
				res = false;
			}
			if(Mother_name.value == ""){
				Mother_name.placeholder= "Enter Your Mother's Name";
				res = false;
			}
			if(Guardian_name.value == ""){
				Guardian_name.placeholder= "Enter Your Guardian's Name";
				res = false;
			}
			if(address.value == ""){
				address.placeholder= "Enter Your Present Address";
				res = false;
			}
			if(Per_address.value == ""){
				Per_address.placeholder= "Enter Your Permanent Address";
				res = false;
			}
			if(mobile.value == ""){
				mobile.placeholder= "Enter Guardian's Mobile Number";
				res = false;
			}
			if(Int_class.value == ""){
				Int_class.placeholder= "Enter Intended Class Name";
				res = false;
			}
			if(Pre_school.value == ""){
				Pre_school.placeholder= "Enter Your Previous School's Name";
				res = false;
			}
			if(Pre_class.value == ""){
				Pre_class.placeholder= "Enter Your Class in Previous School";
				res = false;
			}
			if(Pre_roll.value == ""){
				Pre_roll.placeholder= "Enter Your Roll in Previous School";
				res = false;
			}
			return res;
		}
	</script>
</head>
<body>
	<section class="main_body_form">
		<div class="header">
			<?php include ('header.php')?>
		</div>
		<div class="header_admission">Admission Form</div>
		<div class="content">
			<form action="pdfCreator/generatePDF.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validateForm();">
				<table width="60%" height="450">
					<tr>
						<td>Student's Name:</td>
						<td><input type="text" name="txtName" id="txtName" /></td>
					</tr>
					<tr>
						<td>Father's Name:</td>
						<td><input type="text" name="txtFather" id="txtFather" /></td>
					</tr>
					<tr>
						<td>Mother's Name:</td>
						<td><input type="text" name="txtMother" id="txtMother" /></td>
					</tr>
					<tr>
						<td>Guardian's Name:</td>
						<td><input type="text" name="txtGuardian" id="txtGuardian" /></td>
					</tr>
					<tr>
						<td>Present Address:</td>
						<td><input type="text" name="txtAddress" id="txtAddress" /></td>
					</tr>
					<tr>
						<td>Permanent Address:</td>
						<td><input type="text" name="txtPermanent" id="txtPermanent" /></td>
					</tr>
					<tr>
						<td>Mobile:</td>
						<td><input type="number" name="txtMobile" id="txtMobile" /></td>
					</tr>
					<tr>
						<td>Intended Class:</td>
						<td><input type="text" name="txtIntClass" id="txtIntClass" /></td>
					</tr>
					<tr>
						<td>Previous School's Name:</td>
						<td><input type="text" name="txtPreSchool" id="txtPreSchool" /></td>
					</tr>
					<tr>
						<td>Previous Class:</td>
						<td><input type="text" name="txtPreClass" id="txtPreClass" /></td>
					</tr>
					<tr>
						<td>Previous Roll:</td>
						<td><input type="text" name="txtPreRoll" id="txtPreRoll" /></td>
					</tr>
				</table>
				<div class="subButton"><input type="submit" name="button" id="button" value="Save & Download" /></div>
			</form>
		</div>
		<div class="rules">
			<h3>Rules:</h3>
			<ol type="1">
				<li>Must Bring The Printed Copy Of This Form.</li>
				<li>Must Attach Necessary Certificates And Testimonials.</li>
			</ol>
		</div>
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.9.1.js"></script> 
		
	</section>
</body>
</html>