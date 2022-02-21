<?php 

    $events = new WP_Query( array(
     'post_type' => 'event',
     'category_name' => 'true-italian-taste',
      'posts_per_page' => 1,
      'order' => 'ASC',
      'meta_key' => 'data',
      'meta_compare' => '>=',
      'meta_value' => date ('Y-m-d'),
      'meta_type'  => 'DATE',
      'post_status' => 'publish',
      'orderby' => 'meta_value',
   ));
 
        
?>

<?php while ( $events->have_posts() ) : $events->the_post(); ?>
            
            <h2 style="font-weight:400;"><?php the_field('data'); ?></h2>
            <hr style="height:1px;color:#888B8D;width:333px;">
            <div class="eventhomeimg"><?php the_post_thumbnail(); ?></div>
            <div class="eventhometitle"><p><?php the_title(); ?></p></div>
            <div class="eventhomea"><a href="<?php the_permalink(); ?>">Read More</a></div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>