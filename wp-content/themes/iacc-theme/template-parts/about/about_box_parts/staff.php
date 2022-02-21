<?php while(has_sub_field('Staff')): ?>

          <?php
          
          $staff_image = get_sub_field('staff_profile_image');  
          $staff_name = get_sub_field('staff_name');
          $staff_role = get_sub_field('staff_role');
          $staff_description = get_sub_field('staff_description');
          $staff_linkedin_profile = get_sub_field('staff_linkedin_profile');
          ?>

          <div class="col-md-4 staff-about-div">
            <div class="profile" id="open-<?php echo $staff_image;?>">
              <div class="staff-image">
                <p class="plus-text"><button class="plus-open" onclick="open_card('open-<?php echo $staff_image;?>','close-<?php echo $staff_image;?>')"><i class="fas fa-plus"></i></button></p>
                <div class="staff-image-width">
                <img src="<?php echo $staff_image; ?>"/>
                </div>
                <a href="<?php echo $staff_linkedin_profile; ?>" target="_blank" class="staff-linkedin"><i class="fa fa-linkedin" aria-hidden="true" style="font-size:30px;"></i></a>
              </div>
              <div class="staff-text">
                <p class="board-company-link" style="font-size:20px !important; color:#002E6D !important;" target="_blank"><?php echo $staff_name; ?></p>
                <p class="board-desc"><?php echo $staff_role; ?></p>
              </div>
            </div>
            <div class="back-profile" id="close-<?php echo $staff_image;?>" style="display:none;">
                <p class="plus-text"><button class="plus-close" onclick="close_card('open-<?php echo $staff_image;?>', 'close-<?php echo $staff_image;?>')"><i class="fa fa-close"></i></button></p>
                <div class="back-text">
                  <p class="back-company-link" style="font-size:20px !important; color:white !important;" target="_blank"><?php echo $staff_name; ?></p>
                  <p class="back-role" style="color:white !important;"><?php echo $staff_role; ?></p>
                  <p class="back-desc" style="color:white !important;"><?php echo $staff_description; ?></p>
                </div>
            </div>
          </div>


<?php endwhile; ?>