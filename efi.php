<!DOCTYPE html>
<html lang="en"> 
	<head>
		<title>Travel</title>
		
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico"> 
		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- FontAwesome JS-->
		<script defer src="assets/fontawesome/js/all.min.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script defer src="assets/sass/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<!-- Theme CSS -->  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link id="theme-style" rel="stylesheet" href="assets\sass\bootstrap-4.3.1-dist\css\bootstrap.css">
		<link id="theme-style" rel="stylesheet" href="assets\sass\master.css">
	</head> 

	<body>	
	
		<header>
			<div class="header_menu">
				<div class="menu_logo">
					<img src="images\6ba0454c-7d5d-4a3f-bd59-b24525840817_200x200.png" alt="logo">
				</div>
		
				<div class="menu_items">
					<div class="main_menu">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Explore</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>

					<div class="dropdown">
		
						<button class="dropdown-toggle" data-toggle="dropdown">
							<a id='toggle_btn' class="fas fa-align-justify fa-4x"></a>
						</button>
		
						<ul class="dropdown-menu">
							<li><a href="#">Blog</a></li>
							<li><a href="#">Explore</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
		
					</div>
				</div>
			</div>
		</header>
		
		<section class="first">
			<div class="introduction">
				<div class="introduction-inner">
					Discover your world
				</div>     
			</div>
		</section>
		
		<section class='second'>
			<div class="main_content">
		
				<div class="title">
					<h3>
						Welcome to our world
					</h3>
				</div>
		
				<div class="content">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for.</p> 
				</div>
			</div>
		</section>
		
		<section class="third">
			<div class="third_inner">
				<div class="title">
					<h4>Get in toutch</h4>
				</div>
		
				<div class="content">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p> 
				</div>
			</div>
			<img src="images\philipp-kammerer-6Mxb_mZ_Q8E-unsplash.jpg" alt="">
		</section>
		
		<section class="quarter">
			<ol>
				<li>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
				</li>
				<li>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
				</li>
				<li>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
				</li>
				<li>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
				</li>
			</ol>
		</section>
		
		<section class='fifth'>
			<div class="title">
				<h2>Our trips</h2>
			 </div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">  
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
			
					<div class="item active">
						<img src="images\ray-rui-0mqrqbwjKc4-unsplash.jpg" alt="Africa" style="width:100%;">
						<div class="carousel-caption">
							<h3>Africa</h3>
						</div>
					</div>
			
					<div class="item">
						<img src="images\artiom-vallat-rFxk_Ea9PME-unsplash.jpg" alt="Greece" style="width:100%;">
						<div class="carousel-caption">
							<h3>Greece</h3>
						</div>
					</div>
				
					<div class="item">
						<img src="images\willian-justen-de-vasconcellos-4hMET7vYTAQ-unsplash.jpg" alt="Peru" style="width:100%;">
						<div class="carousel-caption">
							<h3>Peru</h3>
						</div>
					</div>			
				</div>
		
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
	</body>
</html>