
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  

  

  <div class="carousel-inner">

  <?php $count = 0;?>

  <?php while(has_sub_field('slider_homepage')): ?>

  <?php
  
  $home_slider_img = get_sub_field('slider_home_image');
  $home_slider_text = get_sub_field('slider_home_title');
  ?>

  
  <div class="carousel-item <?php 
                                if($count==0){
                                    echo "active";  
                                }
                                else{
                                    echo " ";
                                }
                            ?>" style="background:url('<?php echo $home_slider_img ?>');background-size:cover;background-repeat: no-repeat;">
 
    <!--<img src="<?php echo $home_slider_img ?>" class="d-block w-100 img-fluid" alt="<?php echo $home_slider_text ?>"> -->
      <div class="carousel-caption home-slide-text" style="top:initial !important;">
        <h5><?php echo $home_slider_text ?></h5>
      </div>
    </div>
  <?php  $count++; ?>
  <?php endwhile; ?>
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <div class="slider-button"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <div class="slider-button"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
    <span class="visually-hidden">Next</span>
  </button>
<div class="carousel-indicators">
  <?php $slide = $count-1;?>
  <?php for($a = 0; $a <= $slide; $a++){ ?>
    <?php 
  if($a==0) { ?>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> 
  <?php ;}
  else { ?>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $a;?>" aria-current="true" aria-label="Slide <?php echo $a;?>"></button> 
  <?php  ;}
  } ?>
</div>
</div>
