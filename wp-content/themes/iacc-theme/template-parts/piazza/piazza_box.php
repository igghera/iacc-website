<div class="row row-boxes piazza-boxes-row">

	<?php while(has_sub_field('3_box_piazza')): ?>

	<?php
	  
	$piazza_box_title = get_sub_field('piazza_box_title');
	$piazza_box_text = get_sub_field('piazza_box_text');
	$piazza_box_link = get_sub_field('piazza_box_link');
	?>

                                


	<div class="col-md-4" style="margin-top:10px;margin-bottom:10px;">
			<div class="box-piazza piazza-box-theme">
				<h3 class="title-box-piazza"><?php echo $piazza_box_title ?></h3>
				<p class="text-box-piazza"><?php echo $piazza_box_text ?></p>
				<a href="<?php echo $piazza_box_link ?>" class="link-box-piazza">Discover</a>
			</div>	
	</div>

	<?php endwhile; ?>

</div>