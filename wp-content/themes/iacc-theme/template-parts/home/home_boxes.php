<div class="row row-boxes">
  
	<?php while(has_sub_field('boxes_link_homepage')): ?>

	<?php
	  
	$home_box_img = get_sub_field('image-boxes');
	$home_box_text = get_sub_field('text_box');
	$home_box_link = get_sub_field('linked_page');
	?>

                                


	<div class="col-md-3" style="margin-top:10px;margin-bottom:10px;">
		<a href="<?php echo $home_box_link ?>" >
			<div class="box-page" style="background:url(<?php echo $home_box_img ?>)" >
				<h2 style="font-weight:300;width:80%;"><?php echo $home_box_text ?></h2>
			</div>
		</a>		
	</div>

	<?php endwhile; ?>

</div>

