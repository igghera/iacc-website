<?php while(has_sub_field('board')): ?>

          <?php
            
          $board_company = get_sub_field('board_company');
          $board_company_link = get_sub_field('board_company_link');
          $board_name = get_sub_field('board_name');
          $board_role = get_sub_field('board_role');
          $board_term = get_sub_field('boad_term');
          $board_linkedin_link = get_sub_field('board_linkedin');

          ?>

          <div class="col-md-3 board-about-div">
            <div>
               <?php if( $board_linkedin_link == "" ): ?>
              <hr style="border: 2px solid #000000;width: 99px;">
              <?php else: ?>
              <a href="<?php echo $board_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="font-size:30px;"></i></a>
              <?php endif; ?>
            </div>
            <div class="board-text">
              <a href="<?php echo $board_company_link; ?>" class="board-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $board_company ?></a>
              <p class="board-desc"><?php echo $board_name ?></p>
              <p class="board-desc"><?php echo $board_role ?></p>
              <p class="board-desc"><?php echo $board_term ?></p>
            </div>
          </div>

<?php endwhile; ?>