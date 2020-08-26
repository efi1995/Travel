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
        <a href="<?php echo ROOT_URL; ?>">
          <img src="images\6ba0454c-7d5d-4a3f-bd59-b24525840817_200x200.png" alt="logo">
        </a>  
    </div>
  
      <div class="menu_items">
        <div class="main_menu">
          <ul>
            <li><a href="<?php echo ROOT_URL; ?>blog"> Blog </a></li>
            <li><a href="<?php echo ROOT_URL; ?>explore"> Explore </a></li>
            <li><a href="<?php echo ROOT_URL; ?>contact"> Contact </a></li>
          </ul>
        </div>

        <div class="dropdown">
  
          <button class="dropdown-toggle" data-toggle="dropdown">
            <a id='toggle_btn' class="fas fa-align-justify fa-4x"></a>
          </button>
  
          <ul class="dropdown-menu">
            <li><a href="<?php echo ROOT_URL; ?>blog"> Blog </a></li>
            <li><a href="<?php echo ROOT_URL; ?>explore"> Explore </a></li>
            <li><a href="<?php echo ROOT_URL; ?>contact"> Contact </a></li>
          </ul>
  
        </div>
      </div>
    </div>
  </header>

  <!-- Main pages -->
  <div class="main-page">
    <?php Messages::display(); ?>
    <?php require($view); ?>
  </div>

  <!-- Footer -->
  <footer class="bg-primary footer-position">
   
  </footer>
  
</body>

</html>