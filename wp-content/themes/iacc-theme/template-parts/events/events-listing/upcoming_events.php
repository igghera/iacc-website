<?php 

	// Set current month
	$current_month = '';

    // Get event posts in order
	$events = query_posts( array(
	    'post_type' => 'event',
	    'category_name' => 'events',
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

	$count_mont = 0;
?>

<?php
// Iterate over events
$count_month = 0;
foreach($events as $key => $event){

  // Get event date from post meta
  $event_date = get_post_meta($event->ID, 'data', $single = true);
  $title = $event->post_title;
  $showing_date = date("F d, Y", strtotime($event_date));  
  $image = get_the_post_thumbnail($event->ID);
  $permalink = get_permalink($event->ID);

  // Cache event month/year
  $event_month = date('F Y', strtotime($event_date));

   // Open new group if new month
  if($current_month != $event_month AND $count_month == 0){
    if($key !== 0);  ?>
    <div class="upcoming-events-month" id="upcoming-month-<?php echo $count_month;?>">
    	<h2 class="month-title upcoming-title"> <?php echo $event_month;?></h2>
    		<div class="row">
    <?php 
  };    

  // Add event date as new list item
  if($current_month != $event_month AND $count_month == 1){
    if($key !== 0);  ?>
  			</div>
  	</div>
  	<div style="display:flex;flex-direction: column;justify-content: center;align-items: center;margin-top:65px;" id="div-button-up">
			<a class="button-grey" id="button-up" onclick="OpenUp()" style="margin-top:50px;margin:auto;color:#1D2545;font-size:16px;padding:18px 50px 18px 50px;background-color:rgba(136, 139, 141, 0.15);text-align:center">Show More</a>
		</div>
    <div id="up-event-showing" style="display:none;">
    <div class="upcoming-events-month" id="upcoming-month-<?php echo $count_month;?>">
    	<h2 class="month-title upcoming-title"> <?php echo $event_month;?></h2>
    		<div class="row">
    <?php 
  };    

  // Add event date as new list item
  ?> 

  
  <?php if($current_month != $event_month AND $count_month >= 2){
    if($key !== 0);  ?>
  		</div>
  	</div>
    <div class="upcoming-events-month" id="past-month-<?php echo $count_month;?>" >
    	<h2 class="month-title upcoming-title"><?php echo $event_month;?></h2>
    		<div class="row">
    <?php 
    $count_month++;
    };   
    	
  // Add event date as new list item
  ?> 

  				<div class="col-md-4">
					<div class="event-box">
						<div class="event-box-title">
							<span>Upcoming Events</span>
							<h2 style="font-weight:400;margin-bottom:0px;"><?php echo $showing_date; ?></h2>
				            <hr class="bar-event">	
			      </div>
			            <div class="event-image-box"><?php echo $image; ?></div>
			            <div class="event-box-text"><p style="font-size:19px;font-weight:400;color:#1D2545;"><?php echo $title; ?></p></div>
			            <div class="event-box-link"><a href="<?php echo $permalink; ?>">DISCOVER</a></div>
			    </div>
			    </div>
<?php
   if($current_month != $event_month){
	  	$count_month++;
	  }
	  $current_month = $event_month;	     
}

// Close the last list if query had events
if(count($events))?>

	</div>
</div>
</div>

<script>
	function OpenUp() {
  document.getElementById("button-up").style.display = "none";
  document.getElementById("div-button-up").style.display = "none";
  document.getElementById("up-event-showing").style.display = "block";
}
</script>

<?php;

?>
