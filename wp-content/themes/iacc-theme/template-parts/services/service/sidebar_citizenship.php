<?php
  
  $cta_text = get_field('cta_text');
  $cta_button = get_field('cta_button');
  $cta_link = get_field('cta_link');
  $profile_image = get_field('profile_image');
  $profile_name = get_field('profile_name');
  $profile_description = get_field('profile_bio');
  $profile_logo = get_field('logo_image');
  ?>	

	<div class="col-xl-4 col-xxl-3">
		<div class="cta-citizenship">
			<p><?php echo $cta_text; ?></p>
			<a href="<?php echo $cta_link;?>"><?php echo $cta_button; ?></a>
		</div>
		<div class="profile-citizenship" onmouseover="bluebox('profile-ct-image','profile-ct-description')" onmouseout="normalbox('profile-ct-image','profile-ct-description')">
			<div class="profile-ct-image" id="profile-ct-image" >
				<img src="<?php echo $profile_image; ?>" style="width:100%;max-height:428px;"/>	
			</div>
			<div class="box-page-service-blue citi-blue"id="profile-ct-description" style="display:none;">
				<h2 class="profile-ct-name" style="text-transform:none;margin-bottom:35px;">
					<?php echo $profile_name; ?>
				</h2>
				<p style="color:white;"><?php echo $profile_description; ?></p>
			</div>
		</div>
		<div class="citizenship-logo">
			<img src="<?php echo $profile_logo; ?>"  style="width:100%;"/>	
		</div>
	</div>
</div>

<script>

function bluebox(x,z) {
    document.getElementById(x).style.display = "none";
	document.getElementById(z).style.display = "block";
}

function normalbox(x,z) {
    document.getElementById(x).style.display = "block";
	document.getElementById(z).style.display = "none";
}
</script>


<!-- </div> -->

