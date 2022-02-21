<?php
/**
 * Template Name: Events IACC
 * Description: The template for displaying the Events Page
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/events/gallery_event_2.php"); ?>
<?php // include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/events/events_text.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/events/events_sign.php"); ?>
<?php 
if (wp_is_mobile()){
  include (TEMPLATEPATH . "/template-parts/events/events_box_mobile.php");
} else{
  include (TEMPLATEPATH . "/template-parts/events/events_box.php"); }?>
</div>
</div>
</div>
<?php include (TEMPLATEPATH . "/template-parts/events/gallery_event.php"); ?>

<script>
window.onload = function(){
  document.getElementById("gallery-event-page").style.display = "none";
}

function click_upcoming() {
  document.getElementById("gallery-event-page").style.display = "none";
}

function click_past() {
  document.getElementById("gallery-event-page").style.display = "block";
  $('.owl-carousel').find('.owl-nav').removeClass('disabled');
    $('.owl-carousel').find('.cloned').addClass('margin-gallery');
    $('.owl-carousel').on('changed.owl.carousel', function(event) {
        $(this).find('.owl-nav').removeClass('disabled');
    });

}



</script>

<?php get_footer(); ?>