<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/web/dba/connection.php');
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {	

  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "pictures/".basename($image);

  	// Create database connection
  	$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
  	
  	$sql = "INSERT INTO picture_table (picture) VALUES ('$image')";
  	mysqli_query($conn, $sql);
	   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>