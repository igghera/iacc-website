<div class="row row-page-title">
  <div class="col-12">
    <div class="slide-page-title" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);background-color:grey;display:flex;min-height:438px;justify-content: center;align-items: center;flex-direction: column;">
      <h1><?php echo get_the_title(); ?></h1>
      <a href="<?php echo get_field('link_cta_slider'); ?>" target="_blank" class="cta-slider-page"><?php echo get_field('text_cta_slider'); ?></a>
    </div>
  </div>
</div>