<div class="row row-gallery">


  <div class="gallery owl-carousel">





    <?php

    if( have_rows('image_e_video_gallery') ):
      while( have_rows('image_e_video_gallery') ) : the_row();

         if(have_rows('videos_gallery_piazza')):
          while( have_rows('videos_gallery_piazza')) : the_row();

            $video_backgound = get_sub_field('image_video_gallery_background');
            $video_gallery = get_sub_field('video_gallery_piazza');
            



    ?>

    
    
    
    <div class="item-video active" data-merge="2" style="background-image:url('<?php echo $video_backgound; ?>')"><iframe class="owl-video" href="<?php echo $video_gallery; ?>"></iframe></div>


  <?php
            endwhile;
        endif;

         if( have_rows('images_gallery_piazza') ):
            while( have_rows('images_gallery_piazza') ) : the_row();

                // Get sub value.
                $gallery_image = get_sub_field('image_gallery_piazza');

    ?>

    <div class="item"><img src="<?php echo $gallery_image; ?>"/></div>

  <?php

          endwhile;
        endif;
    endwhile;
endif;
?>

  </div>
  
