<!DOCTYPE HTML>
<html>
<head>
	<title><?php if (isset($title)) echo  $title . ' | '; ?> BVPCSI</title>
	<meta charset = "utf-8">
	<meta name="Description" content="BVPCSI" />
	<meta name = "viewport" content = "width = device-width, initial-scale = 1, maximum-scale = 1">
	<meta name="Keywords" content="bvpcsi, bvcoe, delhi, csi, india" />
	<meta name="Author" content="Ujjwal Bhardwaj" />

	<!--    Facebook Open Graph Tags    -->
	<meta property="og:title" content="BVPCSI" />
	<meta property="og:type" content="non_profit" />
	<meta property="og:url" content="http://www.bvpcsi.in/" />
	<meta property="og:site_name" content="BVPCSI" />
	<meta property="og:description" content="BVPCSI" />
	<meta property="og:image" content="http://www.bvpcsi.in/img/logo.png" />
	<meta name="theme-color" content="#001c32" />
	<link href="Content/bootstrap.min.css" rel="stylesheet" />
	<link href="Content/main.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/csi.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<!-- Timlimne -->
	<link rel="stylesheet" href="Content/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="Content/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="Content/agency.css"> <!-- CSS reset -->
	<script src="Scripts/modernizr.js"></script> <!-- Modernizr -->
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
				$page = $_SERVER["PHP_SELF"];
				$index_active = "";
				$events_active = "";
				$council_active = "";
				$gallery_active = "";
				$login_active = "";
				$nav_color_theme = "";
                $footer_color_theme = "";
			
				if(strcmp($page, "/index.php") == 0){
				 $index_active = "active";
				 $nav_color_theme = "color-home";
				 $footer_color_theme = "footer-color-home";
				 }
				if(strcmp($page, "/council.php") == 0){
				 $council_active = "active";
				 $nav_color_theme = "color-council";
				 $footer_color_theme = "footer-color-council";
				 
				 }
				if(strcmp($page, "/gallery.php") == 0){
				 $gallery_active = "active";
				 $nav_color_theme = "color-gallery";
				 $footer_color_theme = "footer-color-gallery";
				 }
				if(strcmp($page, "/events.php") == 0){
				 $events_active = "active";
				 $nav_color_theme = "color-events";
				 $footer_color_theme = "footer-color-events";
				 }
				if(strcmp($page, "/login.php") == 0){
				 $login_active = "active";
				 $nav_color_theme = "color-login";
				 $footer_color_theme = "footer-color-home";
				 }
				if(strcmp($page, "/contactus.php") == 0){
				 $contactus_active = "active";
				 $nav_color_theme = "color-contactus";
				 $footer_color_theme = "footer-color-contactus";
				 }
				?>
				<ul class="nav navbar-nav <?php echo $nav_color_theme?>">
					<li class="pull-left <?php echo $index_active?>"><a href="index.php">HOME</a></li>
					<li class="<?php echo $council_active?>"><a href="council.php">COUNCIL</a></li>
					<li class="<?php echo $gallery_active?>"><a href="gallery.php">GALLERY</a></li>
					<li class="<?php echo $events_active?>"><a href="events.php">EVENTS</a></li>
					<li class="<?php echo $contactus_active?>"><a href="contactus.php">CONTACT US</a></li>
					<li class="social pull-right <?php echo $login_active?>"><a href="login.php">LOGIN</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>