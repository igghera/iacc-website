 <div class="row row-featured member-box-nav">
  <div class="col-md-12">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#senior" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="click_staff()">Staff</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sustaining" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="click_board()">Board of directors</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="click_advisor()">Advisors</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#yex" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="click_partner()">Partners</button>
        </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="senior" role="tabpanel" aria-labelledby="senior">
    
    <div class="row row-member-box" style="margin-top:53px;">
    
      <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/staff.php"); ?>
          
    </div>

  </div>
  <div class="tab-pane fade" id="sustaining" role="tabpanel" aria-labelledby="sustaining">
    
    <div class="row row-member-box" style="margin-top: 50px !important;">
    
      <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/board.php"); ?>
          
    </div>

  </div>
  <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general">
    
    <div class="row row-member-box">
    
      <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/advisors.php"); ?>
          
    </div>

  </div>
  <div class="tab-pane fade" id="yex" role="tabpanel" aria-labelledby="yex">
    
    <div class="row row-member-box" style="margin-top:20px;">
    
      <?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/partners.php"); ?>
          
    </div>

  </div>
</div>
</div>
<!--</div>-->

</div>
<?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/board_testimonial.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/about/about_box_parts/advisors_cta.php"); ?>
