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
			<div class="a-service" onmouseover="bluebox('box-internship-<?php echo $home_box_link; ?>','box-internship-blue-<?php echo $home_box_link; ?>')" onmouseout="normalbox('box-internship-<?php echo $home_box_link; ?>','box-internship-blue-<?php echo $home_box_link; ?>')">
				<div class="box-page-service" id="box-internship-<?php echo $home_box_link ?>" style="background:url(<?php echo $home_box_img ?>)" >
					<h2 style="font-weight:300;"><?php echo $home_box_text ?></h2>
				</div>
				<div class="box-page-service-blue" id="box-internship-blue-<?php echo $home_box_link ?>" style="background-color:#002E6D;min-height:433px;flex-direction: column !important; display:none;" >
					<h2 style="font-weight:700;color:white;margin-bottom:18px;"><?php echo $home_box_text ?></h2>
					<p style="color:white;font-weight:300;font-size:16px;"><?php echo $description ?></p>
				</div>
			</div>
			<?php endif; ?>
		</a>		
	</div>


	<?php endwhile; ?>

</div>

<div class="row row-content">
	<div class="col-md-12" style="padding:0px;">
		<div style="display:flex;flex-direction: column;justify-content: center;align-items: center;">

			<a class="button-grey" href="./j-1-visa-bridge-usa/" style="margin-top:50px;margin:auto;color:#1D2545;font-size:16px;padding:18px 50px 18px 50px;background-color:rgba(136, 139, 141, 0.15);text-align:center">Apply Today!</a>
		</div>
	</div>
</div>

<script>

function bluebox(x,z) {
    document.getElementById(x).style.display = "none";
	document.getElementById(z).style.display = "flex";
}

function normalbox(x,z) {
    document.getElementById(x).style.display = "block";
	document.getElementById(z).style.display = "none";
}
</script>