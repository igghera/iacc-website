<div class="row row-boxes">
  
    <?php $count_box = 0; ?>

	<?php while(has_sub_field('boxes_link')): ?>

	<?php
	  
	$home_box_img = get_sub_field('image-boxes');
	$home_box_text = get_sub_field('text_box');
	$home_box_link = get_sub_field('linked_page');
	?>

                                

    <?php if ($count_box==0 || $count_box==2 ) {?>
	<div class="col-md-6" style="margin-top:10px;margin-bottom:10px;">
    <?php }
    else { ?>
    <div class="col-md-6" style="margin-top:10px;margin-bottom:10px;">
    <?php } ?>
		<a href="<?php echo $home_box_link ?>" >
            <div class="a-service">
			    <div class="box-page-service" style="background:url(<?php echo $home_box_img ?>);padding-left:20px !important;padding-right:20px !important;" >
				<h2 style="font-weight:300;width:100%;"><?php echo $home_box_text ?></h2>
			</div>
        </div>
		</a>		
	</div>
    <?php $count_box++;?>
	<?php endwhile; ?>

</div>

