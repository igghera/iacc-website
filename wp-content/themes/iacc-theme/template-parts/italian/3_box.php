<div class="row" style="margin-top:72px;">
    
<?php while(has_sub_field('box_true')): ?>

<?php
    $image_box = get_sub_field('image_box');
    $title_box = get_sub_field('title_box');
    $text_box = get_sub_field('text_box');

?>


    <div class="col-md-4">
        <div class="taste-box">
            <div class="taste-img">
                <img src="<?php echo $image_box;?>" alt="" width="62px;">
            </div>
            <div class="taste-title">
                <h2><?php echo $title_box;?></h2>
            </div>
            <div class="taste-text">
                <p><?php echo $text_box;?></p>
            </div>
        </div>
    </div>
<?php endwhile; ?>

</div>