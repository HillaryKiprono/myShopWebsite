<?php
	$conn = new mysqli("localhost","root","","myShop");
	if($conn->connect_error){
		//die("Connection Failed!".$conn->connect_error);
		echo "<script>alert('Connected failed.')</script>";
	}
	
?>