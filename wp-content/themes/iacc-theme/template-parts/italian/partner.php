<div class="row">
    <div class="col-md-12">
        <p class="pre-double-galler">PARTNERS</p>
    </div>
    <div class="row row-partner-true">
        <?php while(has_sub_field('logo_partner')): ?>
        <?php $img_partner = get_sub_field('logo_image');?>
            <div class="col-md-4">
                <div class="logo-partner">
                    <img src="<?php echo $img_partner;?>" alt="">
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>