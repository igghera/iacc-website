<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  

  

  <div class="carousel-inner slider-page-2">

  <?php $count = 0;?>

  <?php while(has_sub_field('slider')): ?>

  <?php
  
  $slider_img = get_sub_field('image_slider');
  $slider_text = get_sub_field('title_slider');
  ?>

  
  <div class="carousel-item <?php 
                                if($count==0){
                                    echo "active";  
                                }
                                else{
                                    echo " ";
                                }
                            ?>">

      <img src="<?php echo $slider_img ?>" class="d-block w-100" alt="<?php echo $slider_text ?>">
      <div class="carousel-caption" style="display:flex !important;flex-direction:column;align-items:center;justify-content:center;text-align: center;bottom:auto;height:100%;top:0 !important;left: 0 !important;margin:auto;width:100%;max-width:800px;">
        <h1 class="slider-page-2-title"><?php echo $slider_text ?></h1>
      </div>
    </div>
  <?php  $count++; ?>
  <?php endwhile; ?>
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <div class="slider-button slide-page-bt"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <div class="slider-button slide-page-bt"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
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
