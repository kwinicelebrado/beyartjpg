<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<style type="text/css">
		.title-form{
		  background-color: #FAF5EF;
		  font-family: Century Gothic;
		  text-align: center;
		  letter-spacing: 4px;
		  font-size: 22px;
		  font-weight: 600;
		}

		.order-form{
		  background-color: white;
		  border: 1.5px solid #AAB7B8;
		  border-radius: 10px;
		  margin: auto;
		  width: 35%;
		  height: 930px;
		  padding: 10px;
		  margin-bottom: 200px;
		}

		label{
		  font-family: Century Gothic;
		  font-size: 17px;
		  font-weight: 600;
		  letter-spacing: 2px;
		  padding-left: 50px; 
		  width: 100%;
		}

		input{
		  font-family: Century Gothic;
		  font-size: 17px;
		  font-weight: 600;
		  letter-spacing: 2px;
		  margin-left: 70px;
		}

		.row-four input{
		  margin-left: 50px;
		  width: 80%;
		  height: 60px;
		  background-color: #FADBD8;
		  border: 1px solid #FADBD8;
		}

		.row-seven input{
		  margin-left: 50px;
		  width: 80%;
		  height: 40px;
		  background-color: #FADBD8;
		  border: 1px solid #FADBD8;
		}

		.row-eight input{
		  margin-left: 50px;
		  width: 80%;
		  height: 40px;
		  background-color: #FADBD8;
		  border: 1px solid #FADBD8;
		}

		.row-one, .row-two, .row-three, .row-four, .row-five, .row-six, .row-seven, .row-eight, .row-nine, .row-ten{
		  margin: 10px 0px;
		}

		.row-two input{
		  margin-top: 10px;
		}

		.row-five input{
		  margin-top: 10px;
		}

		.row-four input{
		  margin-top: 8px;
		}

		.row-seven input{
		  margin-top: 8px;
		}

		.row-eight input{
		  margin-top: 8px;
		}

		.row-nine input{
		  margin-top: 8px;
		  margin-left: 50px;
		}

		.row-ten{
		  margin-top: 50px;
		  text-align: center;
		  align-items: center;
		}

		.row-ten button{
		  background-color: #F6B7B7;
		  border: 1px solid #F6B7B7;
		  border-radius: 30px;
		  width: 60%;
		  color: black;
		  text-align: center;
		  font-family: Century Gothic;
		  font-size: 25px;
		  font-weight: 600;
		  letter-spacing: 2px;
		  padding: 5px
		}
	</style>
</head>

<body>
<!-- H E A D E R -->
	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/header.php');
  	?>


	<form action="orderForm_Connect.php" method="post" enctype="multipart/form-data">
	<div class="title-form">
		<h2>ORDER FORM</h2>
	</div>
	<div class="order-form">
		<div class="row-one">
			<label>Commission type:</label><br> 
			<input value="portrait" type="radio" name="comm_type" required>Portrait<br>
			<input value="bust-up" type="radio" name="comm_type" required>Bust up<br>
			<input value="half-body" type="radio" name="comm_type" required="">Half body<br>
			<input value="full-body" type="radio" name="comm_type" required="">Full body<br>
		</div>
		<div class="row-two">
  	  		<label>Upload your photo (Photo must be clear, much better if HD.</label> 
  	  		<input type="file" name="image" required><br>
  		</div>
  		<div class="row-three">	
			<label>Background:</label><br> 
			<input value="solid" type="radio" name="background" required>1 Solid Color<br>
			<input value="gradient" type="radio" name="background" required>Gradient<br>
			<input value="specific" type="radio" name="background" required>Specific Full Background<br>
			<input value="transparent" type="radio" name="background" required>Transparent<br> 
		</div>
		<div class="row-four">
			<label>For Full Background</label><br>
			<input type="text" name="fullBg"><br>
		</div>
		<div class="row-five">
  	  		<label>Upload your photo</label> 
  	  		<input type="file" name="image2"><br>
  		</div>
  		<div class="row-six">
			<label>Additional Character:</label><br> 
			<input value="one" type="radio" name="addons" required>one (1)<br>
			<input value="two" type="radio" name="addons" required>two (2)<br>
			<input value="none" type="radio" name="addons" required>none<br> 
		</div>
		<div class="row-seven">
			<label>Props or Elements:</label><br> 
			<input type="text" name="props"><br>
		</div>
		<div class="row-eight">
			<label>Enhance or Change something:</label><br> 
			<input type="text" name="enhance"><br>
		</div>
		<div class="row-nine">
			<label>Deadline:</label><br> 
			<input type="date" name="deadline" required><br>
		</div>
		<div class="row-ten">
			<button type="submit" name="submit">Add to cart</button>
		</div>
	</div>
	</form>

	

	<?php
    	include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  	?>

</body>
</html>