<!DOCTYPE html>
<html>
<head>
  <title><?php echo $page_title; ?></title>	
	<meta name="author" content="Felicia Robinson">
	<meta name="description" content="Home for UI Brush">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="styles/main.css" type="text/css" media="screen">
	<link rel="stylesheet" href="styles/mediaqueries.css" type="text/css" media="screen">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  <link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="script/main.js"></script>
	<script src="script/jquery.hovercap.js"></script>
  
</head>
<body>
  <header>
    <div class="wrapper">
      <div class="logo"><a href="index.php"><img src="images/UIBrush.png" class="logo" alt="UIBrush"/></a></div>
			
      <nav class="menu ">
				<span class="fa fa-bars main fa-2x" title="menu"></span>

        <ul>
					<li class="active "<?php if($page_title == "UI Brush | Home" ){ echo "class=\"active\"";} ?>><a href="index.php">HOME</a></li>
          <li <?php if($page_title == "About Us" ){ echo "class=\"active\"";} ?>><a href="aboutus.php">ABOUT US</a></li>
					<li <?php if($page_title == "Services" ){ echo "class=\"active\"";} ?>><a href="services.php">SERVICES</a></li>
          <li <?php if ($page_title == "Portfolio") : echo "class=\"active\""; endif; ?>><a href="portfolio.php">PORTFOLIO</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
    </div> <!--  /.wrapper  -->
  </header>


			