<script>
        jQuery(document).ready(function($){
        	
                var w;
                
               
                w = $( window ).width();
        		
        		console.log(w);
        		$('.tab-pane').width(w);
      
        });
</script>
<div class="row row-featured member-box-nav">
  <div class="col-md-12">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#senior" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Senior Sustaining Members</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sustaining" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sustaining Members</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">General Members</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#yex" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Yex Members</button>
        </li>
      </ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="senior" role="tabpanel" aria-labelledby="senior">
    
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
  <div class="tab-pane fade" id="sustaining" role="tabpanel" aria-labelledby="sustaining">
    
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
  <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general">
    
    <div class="row row-member-box">
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
  <div class="tab-pane fade" id="yex" role="tabpanel" aria-labelledby="yex">

    <div class="row row-member-box">
  
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