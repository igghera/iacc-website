<?php 
$bridge_logo = get_field('bridge_logo');
?>

<div class="row row-content margin-50">
	<div class="col-12 bridge-usa-sidebar-img"><img src="<?php echo $bridge_logo; ?>"  style="width:100%;"/></div>
	<div class="col-xl-8 col-xxl-9">
		<div class="content-text-citizenship">
			<?php echo get_the_content(); ?>
		</div>
	</div>
