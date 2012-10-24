<doctype html>

<html>
	<head>
		<title><?php bloginfo('name');?> <?php wp_title(); ?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sidebar.css">
 		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" />

		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

			<script>
			 // DOM ready
			 $(function() {
					   
      				// Create the dropdown base
      				$("<select />").appendTo("#mainNavi");
      				
      				// Create default option "Go to..."
      				$("<option />", {
      				   "selected": "selected",
      				   "value"   : "",
      				   "text"    : "Go to..."
      				}).appendTo("nav select");
      				
      				// Populate dropdown with menu items
      				$("nav a").each(function() {
      				 var el = $(this);
      				 $("<option />", {
      				     "value"   : el.attr("href"),
      				     "text"    : el.text()
      				 }).appendTo("nav select");
      				});
      				
					   // To make dropdown actually work
					   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      				$("nav select").change(function() {
      				  window.location = $(this).find("option:selected").val();
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
		
		<!-- start mainNavi -->
		<nav id="mainNavi">
			<ul>
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
