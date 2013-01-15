
<doctype html>

<html>
	<head>
		<title><?php bloginfo('name');?> <?php wp_title(); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sidebar.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/kollegium.css" type="text/css" />

		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script> 
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
				<li><a href="<?php bloginfo('url');?>/kollegium" class="aktiv">Kollegium</a></li>
				<li><a href="<?php bloginfo('url');?>/arbeitskreise">Arbeitskreise</a></li>
				<li><a href="<?php bloginfo('url');?>/mittagsbetreuung">Mittagsbetreuung</a></li>
				<li><a href="<?php bloginfo('url');?>/elternbeirat">Elternbeirat</a></li>
				<li><a href="<?php bloginfo('url');?>/foerderverein">F&ouml;rderverein</a></li>
				<li><a href="<?php bloginfo('url');?>/chronik">Chronik</a></li>

			</ul>
		</nav>	<!-- end mainNavi -->
	
		</section> <!-- end headerInner section -->
	</header> <!-- end header -->
