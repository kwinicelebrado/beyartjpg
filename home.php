<?php include($_SERVER['DOCUMENT_ROOT'].'/project/admin/add/galleryConnect.php'); ?>
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
		include('web/including/header.php');
	?>

	<?php
	$sql = "SELECT picture FROM picture_table";
	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($res)) {
		echo "<div class='picsur'>";
			echo "<img src='/project/decors/photos/pictures/".$row['picture']."'>";
		echo "</div>";
	}
	?>

	<?php
		include('web/including/footer.php');
	?>

</body>
</html>