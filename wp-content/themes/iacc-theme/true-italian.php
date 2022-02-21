<?php
/**
 * Template Name: True Italian IACC
 * Description: The template for displaying the True Italian Page
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/piazza/piazza_text.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/italian/3_box.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/italian/video.php"); ?>
<?php 
if ( wp_is_mobile() ){
    include (TEMPLATEPATH . "/template-parts/misc/gallery_1_row.php");?>
    </div>
<?php
} else {
    include (TEMPLATEPATH . "/template-parts/misc/gallery_1_row.php");
}

?>
<?php 
if(wp_is_mobile()){
    include (TEMPLATEPATH . "/template-parts/italian/events_mobile.php");
    }else{
        include (TEMPLATEPATH . "/template-parts/italian/events.php");
    } ?>
<?php include (TEMPLATEPATH . "/template-parts/italian/partner.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/italian/follow.php"); ?>

<?php get_footer(); ?>