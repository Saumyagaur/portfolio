<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>

		<!-- choose on below and uncomment it: -->
		<!--<link rel="stylesheet" href="css/reset.css">-->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/styles.js">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header>
			<img src="<?php bloginfo( 'template_url' ); ?>/images/glasses_logo.png" alt="logo" class="center">

			<nav class="main-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
			</nav>


			<!-- <nav class="navbar navbar-expand-lg navbar-light">
			
	  		<a class="navbar-brand" href="#"></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup" style="background-color: #c0001b; margin-top: 1%; line-height: 10px;"> -->
	    		<!-- <ul class="navbar-nav">
			      		<li><a class="nav-item nav-link active" href="index.html">Home <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="about.html">About <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="photography.html">Photography <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="Design.html">Design <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="contact.html">Contact <span class="col-sm-6"></span></a></li>
	    		</ul> -->
	  		<!-- </div> -->
		<!-- </nav> -->
		</header>