<?php
/**
 * Template Name: Members IACC
 * Description: The template for displaying the Members Page
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/members/members_text.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/members/members_sign.php"); ?>
<?php 
if (wp_is_mobile()){
    include (TEMPLATEPATH . "/template-parts/members/members_box_mobile.php");
}else{
    include (TEMPLATEPATH . "/template-parts/members/members_box.php");
}
 ?>
<?php include (TEMPLATEPATH . "/template-parts/members/members_testimonial.php"); ?>

<?php get_footer(); ?>