<?php
/**
 * Template Name: About Us IACC
 * Description: The template for displaying the About Us Page
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/about/about_text.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/about/about_second_text.php"); ?>
<?php 
if(wp_is_mobile()){
  include (TEMPLATEPATH . "/template-parts/about/about_box_mobile.php"); 
}else{
  include (TEMPLATEPATH . "/template-parts/about/about_box.php"); 
}
?>
<?php include (TEMPLATEPATH . "/template-parts/about/iacc_heritage.php"); ?>

<script>
function click_staff() {
  document.getElementById("heritage").style.display = "none";
  document.getElementById("board-testimonial").style.display = "none";
  document.getElementById("advisor-cta").style.display = "none";
}

function click_board() {
  document.getElementById("heritage").style.display = "none";
  document.getElementById("board-testimonial").style.display = "block";
  document.getElementById("advisor-cta").style.display = "none";
}

function click_advisor() {
  document.getElementById("heritage").style.display = "none";
  document.getElementById("board-testimonial").style.display = "none";
  document.getElementById("advisor-cta").style.display = "block";
}

function click_partner() {
  document.getElementById("heritage").style.display = "none";
  document.getElementById("board-testimonial").style.display = "none";
  document.getElementById("advisor-cta").style.display = "none";
}

function open_card(x, y) { // on a click
  document.getElementById(x).style.display = "none";
  document.getElementById(y).style.display = "block";
}

function close_card(x, y) { // on a click
  document.getElementById(y).style.display = "none";
  document.getElementById(x).style.display = "block";
}

</script>

<?php get_footer(); ?>