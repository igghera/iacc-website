<?php
/**
 * Template Name: J VISA CONTACT IACC
 * Description: The template for displaying the Piazza Italia Page
 * Template Post Type: page, service, careervisa
 *
 */

?>

<?php get_header(); ?>
<div class="simple-title">
    <h1><?php echo get_the_title(); ?></h1>
</div>

<div class="row">
	<div class="col-md-12">
    <div class="contact-form-text">
			<p class="text-before-contact">Fields marked with an * are required</p>
		</div>
		<div class="contact-form">
			<?php echo the_content(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>