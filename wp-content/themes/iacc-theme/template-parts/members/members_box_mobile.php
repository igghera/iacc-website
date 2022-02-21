<div class="row row-featured member-box-nav">
  <div class="col-md-12">
    
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div style="text-align:center;">
        <h2 class="nav-item" id="flush-headingOne">
          <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Senior Sustaining Members</button>      
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box">
            
            <?php while(has_sub_field('senior_sustaining_member')): ?>

            <?php
            
            $senior_logo = get_sub_field('senior_sustaining_member_logo');
            $senior_company = get_sub_field('senior_sustaining_member_company');
            $senior_name = get_sub_field('senior_sustaining_member_name');

            ?>

            <div class="col-md-3 member-logo-div">
            <div class="card-member">
                <img class="member-box-logo"src="<?php echo $senior_logo ?>" alt="">
            </div>
            <div class="member-box-text">
                <h2 class="member-box-company"><?php echo $senior_company ?></h2>
                <span class="member-box-name"><?php echo $senior_name ?></span>
            </div>
            </div>

            <?php endwhile; ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne"  >Sustaining Members</button>       
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box">
            
            <?php while(has_sub_field('sustaining_member')): ?>

            <?php
            
            $sustaining_logo = get_sub_field('sustaining_member_logo');
            $sustaining_company = get_sub_field('sustaining_member_company');
            $sustaining_name = get_sub_field('sustaining_member_name');

            ?>

            <div class="col-md-3 member-logo-div">
            <div class="card-member">
                <img class="member-box-logo"src="<?php echo $sustaining_logo ?>" alt="">
            </div>
            <div class="member-box-text">
                <h2 class="member-box-company"><?php echo $sustaining_company ?></h2>
                <span class="member-box-name"><?php echo $sustaining_name ?></span>
            </div>
            </div>

            <?php endwhile; ?>

                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne" >General Members</button>       
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;"> 
            
            <?php while(has_sub_field('general_members')): ?>

<?php
  
$general_company_link = get_sub_field('general_memebers_company_link');
$general_company = get_sub_field('general_members_company');
$general_name = get_sub_field('general_members_name');


?>

<div class="col-md-3 board-about-div">
  <div class="board-text">
     <a href="<?php echo $general_company_link;?>" class="board-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $general_company ?></a>
    <p class="board-desc"><?php echo $general_name ?></p>
  </div>
</div>

<?php endwhile; ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne" >Yex Members</button>       
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" style="margin-top:-60px;">
            
            <?php while(has_sub_field('yex_members')): ?>

<?php
  
$yex_company = get_sub_field('yex_members_company');
$yex_name = get_sub_field('yex_members_name');
$yex_company_link = get_sub_field('yex_members_link');

?>

<div class="col-md-3 board-about-div">
<div class="board-text">
  <a href="<?php echo $yex_company_link?>" class="board-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $yex_company ?></a>
  <p class="board-desc"><?php echo $yex_name ?></p>
</div>
</div>
<?php endwhile; ?>

                
            </div>
        </div>
      </div>
    </div>
  </div>  
</div>