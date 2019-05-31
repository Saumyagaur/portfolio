<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title></title>

		<!-- choose on below and uncomment it: -->
		<!--<link rel="stylesheet" href="css/reset.css">-->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/styles.js">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/ss/styles.css">
	</head>

	<body>
		<header>
			<img src="<?php bloginfo( 'template_url' ); ?>/images/glasses_logo.png" alt="logo" class="center">
			<nav class="navbar navbar-expand-lg navbar-light">
	  		<a class="navbar-brand" href="#"></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
	    		<ul class="navbar-nav">
			      		<li><a class="nav-item nav-link active" href="index.html">Home <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="about.html">About <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="photography.html">Photography <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="Design.html">Design <span class="col-sm-6"></span></a></li>
			      		<li><a class="nav-item nav-link active" href="contact.html">Contact <span class="col-sm-6"></span></a></li>
	    		</ul>
	  		</div>
		</nav>
		</header>
		<div class="row">
			<div class="col-lg-10" id="contact-form">
	  			<form action="action_page.php">

				    <label for="fname">First Name</label>
				    <input type="text" id="fname" name="firstname" placeholder="Your name..">

				    <label for="lname">Last Name</label>
				    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

				    <label for="country">Country</label>
				    <select id="country" name="country">
					      <option value="australia">Australia</option>
					      <option value="canada">Canada</option>
					      <option value="usa">USA</option>
				    </select>

				    <label for="subject">Subject</label>
				    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				    <input type="submit" value="Submit">

				  </form>
			</div>
		</div>
		<footer>
			<strong>
				<p>Made by Saumya Gaur</p>
			</strong>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>