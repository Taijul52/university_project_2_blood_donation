<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		 <link rel="stylesheet" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body >
     	<header class="headersection">
			<div class="container-fluit">
				<div class="carousel slide" id="screenshort-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshort-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshort-carousel" data-slide-to="1"></li>
						<li data-target="#screenshort-carousel" data-slide-to="2"></li>
						<li data-target="#screenshort-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/blood3.jpg" alt="slide image" >
							
						</div>
						<div class="item">
							<img src="img/blood2.jpg" alt="slide image" >
						</div>
						<div class="item">
							<img src="img/blood4.jpeg" alt="slide image">
						</div>
						<div class="item">
							<img src="img/blood1.jpg" alt="slide image" >
						</div>
					</div><!--end carousel-inner-->
					<a href="#screenshort-carousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#screenshort-carousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!--end carousel-->
			</div>
		</header>
		
		<section class="navigation">
				<nav class="navbar navbar-default">
			<div class="container-fluit">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			   </button>
		 
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
		  <ul class="nav navbar-nav">
				
				<li><a href="index.php" >Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="whydon.php" >Why Donate Blood?</a></li>
				<li><a href="whyneed.php" >Why Needs Blood?</a></li>
				<li><a href="signup.php" >Login</a></li>
			</ul>
		  
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container -->
	</nav>
</section>

<!--container section started-->
	<section >
		
			<div class="container-fluit" >
				<div class="jumbotron" style="background:#5F5F5F";>				
				<div class="row"><!--row-->
					
						<div class="col-md-3">
							<div class="well">
							<h3>Search for Donor</h3>
							<form role="form" action="result.php" method="get">
								<div class="form-group">
									<label>City name:</label>
									<input type="text" class="form-control" name="Cname" placeholder="Enter city name">
								</div>
									<div class="form-group">
									<label>Blood group:</label>
									<select class="form-control" name="blood" style="width: 60%">
										<option>please select your blood group</option>
										<option>A+</option>
										<option>A-</option>
										<option>B+</option>
										<option>B-</option>
										<option>O+</option>
										<option>O-</option>
										<option>AB+</option>
										<option>AB-</option>
										
									</select>
									</div>
									<input type="submit" name="search" value="search" class="form-control" id="sign">
									</form>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="well">
								
									<h3>Registration Form</h3>
									<p>450ml<br>OF BLOOD<br>CAN SAVE<br>AS MANY AS 3 LIVES<p>
									<a href="form.php"><button type="button" class="btn btn-primary" name="search">Registration</button></a>
									</div>
								
								</div>
								
								
								<div class="col-md-3">
						      
								<div class="well">
									<a href="tips.php" >
									<h3>Donors List</h3>
                                  
                                  <p>You are noble, but you got to be informed as well. If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.<p>
									</a>
									</div>
								</div>
								
								
								<div class="col-md-3">
									<div class="well">
									<a href="bloodfacts.php">
									<h3> Blood Facts!</h3>   

                                   <p>A whole world in itself, blood is a living matter! To give blood you need neither extra strength nor extra food,and you will save a life. Share a little, care a little.<p>
									</a>
									</div>
								</div>
								
							</div><!--row sm-->
						</div>
			
		</div>
	</section>
	
		<footer class="foot text-center">
			<div class="container-fluit" style="background:#5F5F5F";>
				<div class="row">
					<div class="col-md-6" style="color:white";>
						<h2>Contacts</h2>
						<p>Email:<span>nahid133060@gmail.com</span></p>
						<p>Mobile:<span>01763591843</span></p>
						<p>Address:<span>RUET</span></p>
					</div>
					<div class="col-md-6">
						<h2>more contacts</h2>
						<div style="margin-top:50px";>
						<a href="#"><img src="img/twitter.png"></a>
							<a href="#"><img src="img/facebook.png"></a>
							
							<a href="#"><img src="img/google.png"></a>
							
							<a href="#"><img src="img/youtube.png"></a>
					</div>
				</div>
				
			</div>
		</footer>
	
       
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="js/jquery.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
