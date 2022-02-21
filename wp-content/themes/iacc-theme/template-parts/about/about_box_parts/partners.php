<?php while(has_sub_field('partners')): ?>

          <?php
            
          $partner_logo = get_sub_field('partner_logo');
          $partner_company = get_sub_field('partner_company');
          $partner_company_link = get_sub_field('partner_company_link');
          $partner_name = get_sub_field('partner_name');
          $partner_term = get_sub_field('partner_term');
          ?>

          <div class="col-md-3 partner-about-div">
            <div style="margin-bottom:50px;height:145px;display:flex;flex-direction:column;justify-content: center;">
              <img class="member-box-logo"src="<?php echo $partner_logo ?>" alt="">
            </div>
            <div class="partner-text">
              <a href="<?php echo $partner_company_link; ?>" class="partner-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $partner_company ?></a>
              <p class="board-desc"><?php echo $partner_name ?></p>
              <p class="board-desc"><?php echo $partner_role ?></p>
            </div>
          </div>

<?php endwhile; ?>