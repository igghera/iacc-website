<?php while(has_sub_field('advisors')): ?>

          <?php
            
          $advisor_company = get_sub_field('advisor_company');
          $advisor_company_link = get_sub_field('advisor_company_link');
          $advisor_name = get_sub_field('advisor_name');
          $advisor_role = get_sub_field('advisor_role');
          $advisor_term = get_sub_field('advisor_term');
          $advisor_linkedin_link = get_sub_field('advisor_linkedin');

          ?>

          <div class="col-md-3 board-about-div">
            <div>
               <?php if( $advisor_linkedin_link == "" ): ?>
              <hr style="border: 2px solid #000000;width: 99px;">
              <?php else: ?>
              <a href="<?php echo $advisor_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="font-size:30px;"></i></a>
              <?php endif; ?>
            </div>
            <div class="board-text">
              <a href="<?php echo $advisor_company_link; ?>" class="board-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $advisor_company ?></a>
              <p class="board-desc"><?php echo $advisor_name ?></p>
              <p class="board-desc"><?php echo $advisor_role ?></p>
              <p class="board-desc"><?php echo $advisor_term ?></p>
            </div>
          </div>

<?php endwhile; ?>