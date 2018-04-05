<?php

	$conn = mysqli_connect("localhost","root","","school");
	
	if(mysqli_connect_errno())
	{
		
		echo "Error occured while connecting with database ".mysqli_connect_errno();
		
	}
	else
	{
		//session_start();
	}
?>
