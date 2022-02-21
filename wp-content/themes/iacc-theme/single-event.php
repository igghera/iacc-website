<?php get_header(); ?>

<div class="row">
	<div class="col-md-4">
		<div class="event-image-single">
			<img src="<?php the_field('image_of_event'); ?>" />
		</div>
	</div>
	<div class="col-md-7">
		<div class="event-content-single">
			<div class="event-content-title">
				<p><?php the_field('data'); ?></p>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="event-content-text">
				<p><?php the_content(); ?></p>
			</div>
			<div class="event-share">
				<p>Share: <a class="social-share-button" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?php the_permalink();?>" style="padding-left:13px;padding-right:13px;" target="_blank">Facebook</a> <a class="social-share-button" href="https://twitter.com/intent/tweet?text=<?php the_permalink();?>" style="padding-left:23px;padding-right:23px;" target="_blank">Twitter</a></p>
			</div>
		</div>
	</div>
</div>	




<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>