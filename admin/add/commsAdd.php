<?php include($_SERVER['DOCUMENT_ROOT'].'/project/admin/add/commsConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<link rel="stylesheet" type="text/css" href="/project/decors/css/adminDesign.css">
	<style type="text/css">
	.data{
      /*width: 100%;*/
      margin: 20px 0;
    }

    .img_div{
      /*width: 80%;*/
      padding: 20px;
      margin: 15px auto;
    }

    .file_choose input{
      margin-left: 50px;
      background-color: #4C4C4B;
      border: 1px solid #4C4C4B;
      padding: 10px;
      color: white;
    }

    .btn button{
      margin-left: 50px;
      background-color: #4C4C4B;
      border: 1px solid #4C4C4B;
      padding: 10px;
      color: white;
    } 
	</style>
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
		<form method="post" action="picture.php" enctype="multipart/form-data">
			<div class="file_choose">
  	  			<input type="file" name="image" required>
  			</div>
			<div class="btn">
  				<button type="submit" name="upload">ADD PICTURE</button>
  			</div>
		</form>

		<div class="data">
		<?php

			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT * FROM comms_table";
			$result = mysqli_query($db, $sql);
				echo "<table>
                    <th>ID</th>
                    <th>Picture Name</th>
                    <th>Uploaded</th>";
			if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		echo	"<style>
                    table{
                    	position: absolute;
                        padding: 10px;
                        margin: auto;
                        width: 70%;
                        text-align: center;
                       	align-items: center;
                       	top: 250px;
                       	left: 300px;
                    } 
                    th{
                        border: 1.5px solid black;
                        background-color: #C39BD3;
                        padding: 5px;
                    }
                    td{
                        border: 1px solid black;
                        background-color: #dcdcdc;
                        padding: 5px;
                    }
                </style>" ;
                echo "<tr>";
                echo "<td>$row[comms_ID]</td>";
                echo "<td>$row[pics]</td>";  
                echo "<td>$row[date_upload]</td>";   
                echo "</tr><br>";    

            }
			} else {
   			 	echo "0 results";
			}
			echo "</table>";
  		?>
  		</div>
	</div>


	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  	?>

</body>
</html>