<?php
/**
 * Template Name: J VISA IACC
 * Description: The template for displaying the Piazza Italia Page
 * Template Post Type: page, service, careervisa
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page.php"); ?>
<span style="margin-top:25px;"></span>
<?php include (TEMPLATEPATH . "/template-parts/services/service/text_sidebar.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/sidebar_visa.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/cta_usa.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_testimonial.php"); ?>
<?php 
if (wp_is_mobile()){
    include (TEMPLATEPATH . "/template-parts/services/service/visa_box_mobile.php");
}else{include (TEMPLATEPATH . "/template-parts/services/service/visa_box.php"); }?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_faq.php"); ?>
<div class="row row-chat">
    <div class="col-12">
        <div class="cta-app">
            <div class="row">
                <div class="col-12">
                    <h2 class="h2-chat-bot">Not finding what you are looking for?<br>Schedule My Consultation</h2>
                </div>
                <div class="col-12">
                    <a href="https://calendly.com/pike-/j-1-visa-consult?back=1&month=2021-12" target="_blank">Click here</a>
                </div>
            </div>      
        </div>  
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


<?php get_footer(); ?>