<?php 
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'news',
      'posts_per_page' => 3,
      'order' => 'DISC',
   ));
        
?>

<div class="row row-news">
	<h2 style="font-weight:300">LATEST NEWS</h2>
	<div class="col-md-8">
		<div class="home-news">		
			<?php if ( $the_query->have_posts() ) : ?>
  			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  			<div class="row news-box">
	  			<div class="col-sm-4 col-xl-6 col-xxl-4">
	  				<div class="img-news"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/></div>
	  			</div>
   			
	   			<div class="text-news col-sm-8 col-xl-6 col-xxl-8">
	   				<span><?php the_date(); ?></span>
	   				<h3 style="margin-top:20px;"><?php the_title(); ?></h3>

	    			<p><?php the_excerpt(); ?></p>
	    			<a href="<?php the_permalink(); ?>">Read More</a>
	    		</div>
    		</div>
			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>

			<?php else : ?>
			  <p><?php __('No News'); ?></p>
			<?php endif; ?>			
		</div>
	</div>
	<div class="col-md-4 sidebar-news-home">
		<div class="row row-event-home">
			<div class="col-md-12">
				<div class="home-event">
				<span>Upcoming Events</span>
  				<?php include (TEMPLATEPATH . "/template-parts/home/home_event.php"); ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="home-banner">
					<div class="img-banner">
						<img src="<?php echo get_field('home_banner_img'); ?>">
					</div>
					<div class="text-banner">
						<h2 style="font-weight:300"><?php echo get_field('home_banner_title'); ?></h2>
						<p><?php echo get_field('home_banner_text'); ?></p>
						<a href="<?php echo get_field('home_banner_link'); ?>">Read More</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>