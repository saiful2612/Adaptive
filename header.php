<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<title><?php wp_title('|', true, 'right');?> <?php bloginfo('name')?></title>
	<meta name="description" content="<?php bloginfo('description')?>">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet'>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?php print IMAGES;?>/icons/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print IMAGES;?>/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print IMAGES;?>/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print IMAGES;?>/icons/apple-touch-icon-114x114.png">

    <?php wp_head();?>
</head>
<body>

	<!-- HEADER -->
	<header class="main-header" id="top">
	
		<div class="top-menu-container">
		
			<div class="container">
			
				<nav class="top-menu-navigation clearfix">
                    <?php wp_nav_menu(array(
                        'theme-location'=>'top-menu'
                    ));?>
				</nav>
				
				<a href="#" class="small-button blue" id="rwd-top-nav-btn"><?php _e('Select a page...','adaptive-framework');?></a>
				<div class="rwd-top-nav"></div> <!-- end rwd-top-nav -->
				
			</div> <!-- end container -->
			
		</div> <!-- end top-menu-container -->
		
		<div class="container">
		
			<div class="row">
			
				<div class="span3 logo-container">
					
					<h1 class="logo">
                        <a href="<?php echo home_url()?>">
                            <img src="<?php echo IMAGES;?>/logo.png" alt="<?php bloginfo('name');?>| <?php bloginfo('description');?> " />
                        </a>
                    </h1>
					
				</div> <!-- end span3 -->
				
				<div class="span9 clearfix">
					
					<figure class="ad-block fr top-ad">
						<a href=""><img src="http://lorempixel.com/468/60" alt="Ad" /></a>
					</figure>
					
				</div> <!-- end span9 -->
				
			</div> <!-- end row -->
			
			<hr />
			
			<nav class="main-navigation clearfix">
                <?php wp_nav_menu(array(
                    'theme-location'=>'top-menu'
                ));?>

			</nav>

			<a href="#" class="small-button blue" id="rwd-main-nav-btn"><?php _e('Select a page...','adaptive-framework');?></a>
			<div class="rwd-main-nav"></div> <!-- end rwd-main-nav -->
			
		</div> <!-- end container -->
		
	</header> <!-- end main-header -->