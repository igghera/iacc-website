<?php

    $video_hero = get_field('video_hero_link');
    $video_immagine = get_field('image_background_video_hero');

?>



<div class="row row-gallery" style="margin-top:74px !important;">


  <div class="video-hero owl-carousel" id="video-hero">

        
    
    <div class="item-video active" data-merge="8" style="background-image:url('<?php echo $video_immagine;?>')" ><a class="owl-video" href="<?php echo $video_hero;?>"></a></div>


  </div>
  
</div>
<p class="pre-double-galler">ACTIVITIES & EVENTS</p>