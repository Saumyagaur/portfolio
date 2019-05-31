<?php /* Template Name: home */ ?>
<?php get_header(); ?>
		

		<section>
	  		<div class="row">
	    		<div class="col-xl-6 padding-0">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/name_site.jpg" alt="Saumya" style="width:100%;">
				</div>

	   			<div class="col-xl-6 padding-0">
	     		 	<img src="<?php bloginfo( 'template_url' ); ?>/images/gaur_site.jpg" alt="Gaur" style="width:100%">
	    		</div>
	  		</div>
  		</section>

  		<div class="container">
  			<h1>Testimonials</h1>
  			<div class="row">
  				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  		 		<div class="col col-lg-3 ml-auto">
  					<div class="card" style="width: 18rem;">
				  		<img class="card-img-top" <?php the_post_thumbnail(); ?>>
				  		<div class="card-body">
							<p class="card-text"><?php the_content(); ?> </p> 
					    	<h5 class="card-title"><?php the_title(); ?></h5>
				  		</div>
					</div>
				</div>
				<?php endwhile; else: ?>
    			<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				<!-- <div class="col col-lg-3 ml-auto">
  					<div class="card" style="width: 18rem;">
				  		<img class="card-img-top" src="<?php bloginfo( 'template_url' ); ?>/images/cake.jpg" alt="Mr. Cakey Cakerson">
				  		<div class="card-body">
							<p class="card-text"> "She is sweeter than me, the chef only gives me flavours but Saumya gives me filters." </p> 
					    	<h5 class="card-title">-Cakey Cakerson</h5>
				  		</div>
					</div>
				</div>
				<div class="col col-lg-3 ml-auto">
  					<div class="card" style="width: 18rem;">
				  		<img class="card-img-top" src="<?php bloginfo( 'template_url' ); ?>/images/teddy.jpg" alt="Bear Withme">
				  		<div class="card-body">
							<p class="card-text"> "I used to think I cannot be any cuter but then I saw the photos Saumya clicked of me."</p> 
					    	<h5 class="card-title">-Bear Withme</h5>
				  		</div>
					</div>
				</div> -->
			</div>
  		</div>

		<?php get_footer(); ?>