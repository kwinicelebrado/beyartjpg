<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<link rel="stylesheet" type="text/css" href="decors/css/adminDesign.css">
	
</head>

<body>
<!-- H E A D E R -->
	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/header.php');
  	?>

  	<div class="header">
		<h1>Admin Panel</h1>
	</div>

	<div class="sidebar">
		<ul>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Pages</a>
				<div class="dropChoice">
					<a href="/finals/upload-image/picture.php">Gallery</a>
					<a href="#">Commissioned Works</a>
					<a href="#">About</a>
					<a href="#">FAQ</a>
					<a href="#">Commissioned Information</a>
					<a href="#">Terms of Service</a>
					<a href="#">Order Form</a>
				</div>
			</li>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Users</a>
				<div class="dropChoice">
					<a href="#">Add Users</a>
					<a href="#">Manage Users</a>
				</div>
			</li>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Orders</a>
				<div class="dropChoice">
					<a href="#">Commissioned Works</a>
					<a href="#">About</a>
				</div>
			</li>
		</ul>
	</div>

	<div class="center">
	</div>


	
	

	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  	?>

</body>
</html>