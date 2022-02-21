<div class="row row-featured member-box-nav">
  <div class="col-md-12">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div style="text-align:center;">
        <h2 class="nav-item" id="flush-headingOne">
          <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" onclick="click_staff()">Staff</button>      
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;">
            
             <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/staff.php"); ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne"  onclick="click_board()">Board of directors</button>       
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;">
            
            <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/board.php"); ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne"  onclick="click_advisor()">Advisors</button>       
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;"> 
            
            <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/advisors.php"); ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne"  onclick="click_partner()">Partners</button>       
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;">
            
            <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/partners.php"); ?>
                
            </div>
        </div>
      </div>
    </div>
  </div>  
</div>
<?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/board_testimonial.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/advisors_cta.php"); ?>
