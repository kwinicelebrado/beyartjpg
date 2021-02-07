<?php include($_SERVER['DOCUMENT_ROOT'].'/project/admin/add/aboutConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<style type="text/css">
		.box{
			width: 30%;
			border: 1px solid #F6B7B7;
			background-color: #F6B7B7;
			align-items: center;
			text-align: center;
			margin: auto;
			margin-top: 150px;
			padding: 10%;
			height: 50px;
		}

		.icons{
		  margin-top: 120px;
		}

		.box .icons img{
		  padding-left: 7px;
		}

		.abt_div{
		  text-align: center;
		  align-items: center;
		  margin-top: -350px;
		}

		.abt_div img{
		  width: 300px;
		  height: 300px;
		  padding-left: 20px;
		  border-radius: 50%;
		}
	</style>
	
</head>

<body>
<!-- H E A D E R -->
	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/header.php');
  	?>

	<div class="box">
	<?php
			$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT profile, info FROM about_profile";
			$result = mysqli_query($conn, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div class='abt_div'>";
      				echo "<img src='/project/decors/photos/about_profile/".$row['profile']."' >";
      				echo "<h1>ABOUT</h1>";
      				echo "<p>".$row['info']."</p>";
      			echo "</div>";
    		}
  		?>
  		<div class="icons">
  			<a href="https://www.instagram.com/beyart.jpg" target="_blank">
				<img src="/project/decors/css/logos/sns-ig.png" alt="instagram" width="40" height="40" ></a>

			<a href="https://www.facebook.com/beyartjpg" target="_blank">
				<img src="/project/decors/css/logos/sns-fb.png" alt="facebook" width="40" height="40"></a>

			<a href="https://www.twitter.com/beyartjpg" target="_blank">
				<img src="/project/decors/css/logos/sns-twt.png" alt="twitter" width="40" height="40"></a>

			<a href="https://www.deviantart.com/beyartjpg" target="_blank">
				<img src="/project/decors/css/logos/sns-da.png" alt="deviant art" width="40" height="40"></a>

			<a href="https://pinterest.ph/beyartjpg/" target="_blank">
				<img src="/project/decors/css/logos/sns-pinterest.png" alt="pinterest" width="40" height="40"></a>

			<a href="https://youtube.com/c/Beyartjpg" target="_blank">
				<img src="/project/decors/css/logos/sns-yt.png" alt="youtube" width="40" height="40"></a>	

			<a href="mailto:beyartjpg@gmail.com" type="email" target="_blank">
				<img src="/project/decors/css/logos/sns-email.png" alt="email" width="40" height="40"></a>
  		</div>
	</div>

	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  	?>

</body>
</html>