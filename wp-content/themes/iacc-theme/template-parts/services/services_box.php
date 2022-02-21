<div class="row row-boxes">


	<?php while(has_sub_field('boxes_link')): ?>

	<?php
	  
	$home_box_img = get_sub_field('image-boxes');
	$home_box_text = get_sub_field('text_box');
	$home_box_link = get_sub_field('linked_page');
	$description = get_sub_field('description_box');
	?>

                                


	<div class="col-md-4" style="margin-top:10px;margin-bottom:10px;">
		<a href="<?php echo $home_box_link ?>">

		<?php if ( wp_is_mobile() ):?>
			<div class="a-service">
				<div class="box-page-service" id="box-service-<?php echo $home_box_link ?>" style="background:url(<?php echo $home_box_img ?>)" >
					<h2 style="font-weight:300;"><?php echo $home_box_text ?></h2>
				</div>
			</div>
		<?php else: ?>

			<div class="a-service" onmouseover="bluebox('box-service-<?php echo $home_box_link; ?>','box-service-blue-<?php echo $home_box_link; ?>')" onmouseout="normalbox('box-service-<?php echo $home_box_link; ?>','box-service-blue-<?php echo $home_box_link; ?>')">
				<div class="box-page-service" id="box-service-<?php echo $home_box_link ?>" style="background:url(<?php echo $home_box_img ?>)" >
					<h2 style="font-weight:300;"><?php echo $home_box_text ?></h2>
				</div>
				<div class="box-page-service-blue" id="box-service-blue-<?php echo $home_box_link ?>" style="background-color:#002E6D;display:none;" >
					<h2 style="font-weight:700;color:white;margin-bottom:18px;"><?php echo $home_box_text ?></h2>
					<p style="color:white;font-weight:300;font-size:16px;"><?php echo $description ?></p>
				</div>
			</div>

		<?php endif; ?>
		</a>		
	</div>


	<?php endwhile; ?>

</div>

<script>

function bluebox(x,z) {
    document.getElementById(x).style.display = "none";
	document.getElementById(z).style.display = "block";
}

function normalbox(x,z) {
    document.getElementById(x).style.display = "block";
	document.getElementById(z).style.display = "none";
}
</script>