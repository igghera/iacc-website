<?php 

	// Set current month
	$current_year = '';

    // Get event posts in order
	$events = query_posts( array(
	    'post_type' => 'event',
	    'category_name' => 'true-italian-taste',
	    'meta_key' => 'data',
	    'meta_compare' => '<',
	    'meta_value' => date ('Y-m-d'),
	    'meta_type'  => 'DATE',
	    'post_status' => 'publish',
	    'posts_per_page' => '99',
	    'orderby' => 'meta_value',
	    'order' => 'DISC',
	    'paged' => $paged
	) );

?>

<?php
// Iterate over events
$count_year = 0;
foreach($events as $key => $event){

  // Get event date from post meta
  $event_date = get_post_meta($event->ID, 'data', $single = true);
  $title = $event->post_title;
  $showing_month = date("F d", strtotime($event_date));  
  $showing_year = date("Y", strtotime($event_date));  
  $permalink = get_permalink($event->ID);
  $excerpt = get_the_excerpt($event->ID);

  // Cache event month/year
  $event_year = date('Y', strtotime($event_date));

   // Open new group if new month
  if($current_year != $event_year){
    if($key !== 0);  ?>
    <div class="upcoming-events-month" id="upcoming-month-<?php echo $count_month;?>">
    	<h2 class="month-title">Past Events <?php echo $event_year;?></h2>
        <div class="row">
    <?php $count_year++; ?>
	<?php } ?>
    

  				<div class="col-md-4">
				  <?php if($count_year < 3): ?>	
					<div class="event-box top-20">
					<?php elseif($count_year > 2): ?>
						<div class="event-box-2 top-20">
						<?php endif; ?>


						<?php if($count_year < 3): ?>
						<div class="event-box-title">
							<span>EVENTS</span>
							<h2 style="font-weight:400;margin-bottom:0px;"><?php echo $title; ?></h2>
				            <hr class="bar-event">		
			            </div>
			            <div class="event-box-text-taste"><p style="font-size:19px;font-weight:400;color:#1D2545;"><?php echo $excerpt; ?></p></div>
                            <?php elseif($count_year > 2): ?>
						<div class="event-box-title-2">
							<span>EVENTS</span>
			            </div>
			            <div class="event-box-text-taste-2" style="justify-content: flex-start;"><p style="font-size:32px;font-weight:400;color:#002E6D;"><?php echo $title; ?></p></div>
                        <?php endif; ?>
                        <div class="event-box-link"><a href="<?php echo $permalink; ?>">DISCOVER</a></div>
			    </div>
			    </div>
<?php
	  if ($current_year != $event_year){
          $count_year++;
      }
      $current_year = $event_year;	     
}

// Close the last list if query had events
if(count($events)):?>



<?php
endif;

?>
</div>
</div>
