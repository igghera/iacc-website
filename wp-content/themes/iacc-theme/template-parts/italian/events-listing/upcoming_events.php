<?php 

	// Set current month
	$current_year = '';

    // Get event posts in order
	$events = query_posts( array(
	    'post_type' => 'event',
	    'category_name' => 'true-italian-taste',
	    'meta_key' => 'data',
	    'meta_compare' => '>=',
	    'meta_value' => date ('Y-m-d'),
	    'meta_type'  => 'DATE',
	    'post_status' => 'publish',
	    'posts_per_page' => '99',
	    'orderby' => 'meta_value',
	    'order' => 'ASC',
	    'paged' => $paged
	) );

?>

<?php
// Iterate over events
foreach($events as $key => $event){

  // Get event date from post meta
  $event_date = get_post_meta($event->ID, 'data', $single = true);
  $title = $event->post_title;
  $showing_month = date("F d", strtotime($event_date));  
  $showing_year = date("Y", strtotime($event_date));  
  $permalink = get_permalink($event->ID);

  // Cache event month/year
  $event_year = date('Y', strtotime($event_date));

   // Open new group if new month
  if($current_year != $event_year){
    if($key !== 0);  ?>
    <div class="upcoming-events-month" id="upcoming-month-<?php echo $count_month;?>">
    	<h2 class="month-title">Events <?php echo $event_year;?></h2>
			<div class="row">
	<?php } ?>
    

  				<div class="col-md-4">
					<div class="event-box">
						<div class="event-box-title">
							<span>Upcoming Events</span>
							<h2 style="font-weight:400;margin-bottom:0px;"><?php echo $showing_month; ?><br><?php echo $showing_year; ?></h2>
				            <hr class="bar-event">		
			      </div>
			            <div class="event-box-text-taste"><p style="font-size:19px;font-weight:400;color:#1D2545;"><?php echo $title; ?></p></div>
			            <div class="event-box-link"><a href="<?php echo $permalink; ?>">DISCOVER</a></div>
			    </div>
			    </div>
<?php
	  $current_year = $event_year;	     
}

// Close the last list if query had events
if(count($events)):?>



<?php
endif;

?>
</div>
</div>
