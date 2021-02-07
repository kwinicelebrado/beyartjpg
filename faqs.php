<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/project/decors/css/styling.css">
	<style type="text/css">
      /*TITLE*/
        .Title{
          margin-top: 50px;
          text-align: center;
        }

        /*QUESTIONS*/
        .Questions{
          margin: 0 25%;
          padding: 0px 30px;
          text-align: left;
          font-weight: bold;
          font-size: 20px;
          margin-top: 70px;
          margin-bottom: 100px;
        }

        .qdropdown-content{
          background-color: #F6B7B7;
          border-radius: 20px;
          margin-bottom: 20px;
          padding: 5px;
        }

        .qdropdown-link{
          font-size: 16px;
          color: black;
          text-decoration: none;
          background-color: #F6B7B7;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 5px 0;
          letter-spacing: 2px;
        }

        .qdropdown-link i{
          color: #CD5C5C;
          padding: 0.5rem;
        }

        .qdropdown-link .ion-md-arrow-dropup{
          display: none;
        }

        .ion-md-arrow-dropup{
          font-size: 30px;
        }

        .ion-md-arrow-dropdown{
          font-size: 30px;
        }

        .answer{
          border: none;
          border-radius: 20px;
          max-height: 0;
          overflow: hidden;
          position: relative;
          background-color: #FADBD8 ;
          transition: max-height 650ms;
          letter-spacing: 2px;
        }

        .answer::before{
          content: "";
          position: absolute;
          width: .9rem;
          height: 90%;
          background-color: #CD5C5C;
          top: 50%;
          left: 0;
          transform: translateY(-50%);
        }

        .answer p{
          color: black;
          font-size: 16px;
          padding: 20px;
        }

        .qdropdown-content:target .answer{
          max-height: 20rem;
        }

        .qdropdown-content:target .qdropdown-link .ion-md-arrow-dropdown{
          display: none;
        }

        .qdropdown-content:target .qdropdown-link .ion-md-arrow-dropup{
          display: block;
        }
  </style>
</head>

<body>
<!-- H E A D E R -->
	<?php
      include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/header.php');
  ?>

	<!-- TITLE -->
	<div class="Title">
		<h1>FREQUENTLY ASKED QUESTIONS</h1>
	</div>

	<!-- QUESTIONS -->
	<div class="Questions">
		<div class="qdropdown">
  			<div class="qdropdown-content" id="q1">
  				<a class="qdropdown-link" href="#q1">
  					What tools do you use for your digital art?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>I use iPad 6th generation and a cheap stylus I bought online.</p>
  				</div>
  			</div>


  			<div class="qdropdown-content" id="q2">
  				<a class="qdropdown-link" href="#q2">
  					What app or software do you use for you digital art?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>I recently switch to Procreate but before I bought it, I just use the Adobe Draw and IbisPaintx.</p>
  				</div>
  			</div>	

  			<div class="qdropdown-content" id="q3">
  				<a class="qdropdown-link" href="#q3">
  					Are you accepting a personal commission?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>Yes. I always open a few slots every month. In the commission page, you can see the status of my commission if I am accepting (open) or not (close).</p>
  				</div>
  			</div>

  			<div class="qdropdown-content" id="q4">
  				<a class="qdropdown-link" href="#q4">
  					How long does it take for you to finish an illustration?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>It actually depends on a lot of factor. I'm not a full-time artist, I am still a student so I manage my time drawing, doing activities/homework and doing chores. But if we're talking in hours, I usually spend like 4-22 hrs depending on the piece I'm drawing.</p>  					
  				</div>
 			</div>

 			<div class="qdropdown-content" id="q5">
  				<a class="qdropdown-link" href="#q5">
  					What brushes do you use?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>On Procreate, I just use like 3-5 brushes like round brush, taper brush, soft airbrush and some brushes that I modify according to my preference. But on Adobe Drarrow-dropupaw, I just use the round brush and taper brush.</p>
  				</div>
 			</div>

 			<div class="qdropdown-content" id="q6">
  				<a class="qdropdown-link" href="#q6">
  					Can I use you art as a wallpaper or profile picture?
  					<i class="icon ion-md-arrow-dropdown"></i>
  					<i class="icon ion-md-arrow-dropup"></i>
  				</a>
  				<div class="answer">
  					<p>Yes. Definitely.</p>
  				</div>
 			</div>
		</div>
	</div>

	<?php
      include($_SERVER['DOCUMENT_ROOT']. '/project/web/including/footer.php');
  ?>

</body>
</html>