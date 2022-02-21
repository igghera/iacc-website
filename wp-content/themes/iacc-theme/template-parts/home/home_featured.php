<div class="row row-featured">
	<div class="col-12 number-box only-mobile">
		<h2 style="font-weight: 300;">FEATURED MEMBERS</h2>
		<span class="numbers"><?php echo get_field('home_featured_members_numbers'); ?>+</span>


		<span class="numbers-text">tristate area’s leading business</span>

	</div> 
	<div class="col-12 only-mobile" style="margin-top:20px;padding-left:40px;padding-right:40px;">
		
		<p><?php echo get_field('home_featured_members_text'); ?></p>
		<a href="./members/" style="margin-top:40px;">View All Members</a>
	</div>
	<div class="col-md-8 only-desktop" style="flex-direction: column;">
		<h2 style="font-weight: 300;">FEATURED MEMBERS</h2>
		<p><?php echo get_field('home_featured_members_text'); ?></p>
		<a href="./members/">View All Members</a>
	</div>
	<div class="col-md-4 number-box only-desktop">
		<span class="numbers"><?php echo get_field('home_featured_members_numbers'); ?>+</span>


		<span class="numbers-text">tristate area’s leading business</span>

	</div>
</div>
<div class="row row-featured only-desktop">
	
	<?php while(has_sub_field('home_featured_members_logos')): ?>

	<?php
	  
	$home_feat_img = get_sub_field('logos_featured_members_in_home');
	?>

	<div class="col-md-3 logo-div">
		<div class="logo-featured-home">
			<img src="<?php echo $home_feat_img ?>" alt="">
		</div>
	</div>

	<?php endwhile; ?>

</div>

<div class="row row-featured only-mobile">
	
	<div class="gallery-feat owl-carousel">

		<?php while(has_sub_field('home_featured_members_logos')): ?>

		<?php $home_feat_img = get_sub_field('logos_featured_members_in_home');?>

			<div class="item"><img src="<?php echo $home_feat_img; ?>"/></div>

		<?php endwhile;?>

	</div>

</div>