<?php include($_SERVER['DOCUMENT_ROOT'].'/project/admin/add/commsConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<style type="text/css">
		.picsur{
		  margin-top: 20px;
		  margin-left: 20px;
		  display: inline-block;
		}
		.picsur img{
		    width: 430px;
		    height: 430px;
		    padding-left: 20px;
		}
	</style>
</head>

<body>
<!-- H E A D E R -->
	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/header.php');
  	?>


	<?php
			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT pics FROM comms_table";
			$result = mysqli_query($db, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div class='picsur'>";
      				echo "<img src='/project/decors/photos/picsur/".$row['pics']."' >";
      			echo "</div>";
    		}

	?>


	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  	?>

</body>
</html>