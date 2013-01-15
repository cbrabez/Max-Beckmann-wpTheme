<!DOCTYPE html>

<html>
	<head>
		<title><?php bloginfo('name');?> <?php wp_title(); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sidebar.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/timeline.css" type="text/css" />
			
			
			<style>
			#timeline-embed{
				margin:0px !important;
				border:0px solid #CCC !important;
				padding:0px !important;
				-webkit-border-radius:0px !important;
				-moz-border-radius:0px !important;
				border-radius:0px !important;
				-moz-box-shadow:0 0px 0px rgba(0, 0, 0, 0.25) !important;
				-webkit-box-shadow:0 0px 0px rgba(0, 0, 0, 0.25) !important;
				box-shadow:0px 0px 0px rgba(0, 0, 0, 0.25) !important;
			}
			</style>
	</head>
	
	<body>
	
	<header>
		<section id="headerInner">
		
		<!-- logo -->
		<h1>
			<a id="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		</h1>
		<!-- end logo -->
		
		<!-- start mainNavi -->
		<nav id="mainNavi">
			<ul>
				<li><a href="<?php bloginfo('url');?>">Aktuelles</a></li>
				<li><a href="<?php bloginfo('url');?>/klassen">Klassen</a></li>
				<li><a href="<?php bloginfo('url');?>/kollegium">Kollegium</a></li>
				<li><a href="<?php bloginfo('url');?>/arbeitskreise">Arbeitskreise</a></li>
				<li><a href="<?php bloginfo('url');?>/mittagsbetreuung">Mittagsbetreuung</a></li>
				<li><a href="<?php bloginfo('url');?>/elternbeirat">Elternbeirat</a></li>
				<li><a href="<?php bloginfo('url');?>/foerderverein">F&ouml;rderverein</a></li>
				<li><a href="<?php bloginfo('url');?>/chronik" class="aktiv">Chronik</a></li>			
			</ul>
		</nav>	<!-- end mainNavi -->
	
		</section> <!-- end headerInner section -->
	</header> <!-- end header -->
