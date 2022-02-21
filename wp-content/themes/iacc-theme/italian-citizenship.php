<?php
/**
 * Template Name: Italian Citizenship IACC
 * Description: The template for displaying the Piazza Italia Page
 * Template Post Type: page, service
 *
 */

?>

<?php get_header(); ?>
<input type="hidden" id="refreshed" value="no">
<div id="faq-to-close">
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/text_sidebar.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/sidebar_citizenship.php"); ?>

<?php include (TEMPLATEPATH . "/template-parts/services/service/service_faq.php"); ?>
<div id="faq-to-close-2">
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_testimonial.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_gallery.php"); ?>
</div>
</div>

<script>
function faq_open() {
  document.getElementById("faq-to-close").style.display = "none";
  document.getElementById("faq-to-close-2").style.display = "none";
  document.getElementById("faq-button").style.display = "none";
  document.getElementById("chat-bot-faq").style.display = "block";
  document.getElementById("faq-to-open").style.display = "block";
  document.getElementById("cta-faq-2").style.display = "block";
  document.getElementById("row-faq").classList.remove("row-faq");
  document.getElementById("row-faq").classList.add("row-faq-open");
}



</script>


<script>
    window.addEventListener( “pageshow”, function ( event ) {
    var historyPage = event.persisted ||
    ( typeof window.performance != “undefined” &&
    window.performance.navigation.type === 2 );
    if ( historyPage ) {
    // Handle page restore.
    document.getElementById("faq-to-close").style.display = "block";
  document.getElementById("faq-to-close-2").style.display = "block";
  document.getElementById("faq-button").style.display = "block";
  document.getElementById("chat-bot-faq").style.display = "none";
  document.getElementById("faq-to-open").style.display = "none";
  document.getElementById("cta-faq-2").style.display = "none";
  document.getElementById("row-faq").classList.add("row-faq");
  document.getElementById("row-faq").classList.remove("row-faq-open");
    }
    });
</script>
<?php get_footer(); ?>