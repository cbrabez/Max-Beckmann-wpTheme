<doctype html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title><?php bloginfo('name');?> <?php wp_title(); ?></title>
		
		<!-- default stylesheets -->
		<link rel="stylesheet" media="screen and (min-width: 641px)" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sidebar.css">
		<link rel="stylesheet" media="screen and (min-width: 641px)" href="<?php bloginfo('stylesheet_url'); ?>" />

 		<!-- specific stylesheets -->
 		

 		<!-- reset stylesheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" />

		<!-- javascript -->
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("header .nav-button").click(function () {
				$("header .nav-button,.primary-nav").toggleClass("open");
				});    
			});
		</script>
			
		
	</head>
	
	<body>
	
	<header>
		<section id="headerInner">
		
		<!-- logo -->
		<h1>
			<a id="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		</h1>
		<!-- end logo -->
		<!-- mobile navigation-button -->
		<button class="nav-button"><p>Navigation aufklappen</p></button>
		<!-- start mainNavi -->
		<nav id="mainNavi">
			<ul class="primary-nav">
				<li><a href="<?php bloginfo('url');?>" class="aktiv">Aktuelles</a></li>
				<li><a href="<?php bloginfo('url');?>/klassen">Klassen</a></li>
				<li><a href="<?php bloginfo('url');?>/kollegium">Kollegium</a></li>
				<li><a href="<?php bloginfo('url');?>/arbeitskreise">Arbeitskreise</a></li>
				<li><a href="<?php bloginfo('url');?>/mittagsbetreuung">Mittagsbetreuung</a></li>
				<li><a href="<?php bloginfo('url');?>/elternbeirat">Elternbeirat</a></li>
				<li><a href="<?php bloginfo('url');?>/foerderverein">F&ouml;rderverein</a></li>
				<li><a href="<?php bloginfo('url');?>/chronik">Chronik</a></li>
			</ul>

			
		</nav>	<!-- end mainNavi -->
	
		</section> <!-- end headerInner section -->
	</header> <!-- end header -->
