
<div id="carouselExampleCaptions" class="carousel slide carou-testimonial" data-bs-ride="carousel" style="margin-top:63px">
  

  

  <div class="carousel-inner">

  <?php $counttest = 0;?>

  <?php while(has_sub_field('piazza_italia_testimonial')): ?>

  <?php
  
  $piazza_testimonial_img = get_sub_field('testimonial_foto_piazza');
  $piazza_testimonial_name = get_sub_field('testimonial_name_piazza');
  $piazza_testimonial_citation = get_sub_field('testimonial_citation_piazza');
  ?>

  
  <div class="carousel-item carousel-testimonial <?php 
                                if($counttest==0){
                                    echo "active";  
                                }
                                else{
                                    echo " ";
                                }
                            ?>" >

        <div class="slide-testimonial">
          <img src="<?php echo $piazza_testimonial_img ?>" class="d-block">     
          <h2 class="testimonial-name"><?php echo $piazza_testimonial_name ?></h2>
          <p class="testimonial-citation"><?php echo $piazza_testimonial_citation ?></p>
        </div>
    </div>
  <?php  $counttest++; ?>
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
<div class="carousel-indicators indicators-testimonial">
    <?php $slide = $counttest-1;?>
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
