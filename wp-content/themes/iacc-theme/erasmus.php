<?php
/**
 * Template Name: Erasmus IACC
 * Description: The template for displaying the Piazza Italia Page
 * Template Post Type: careervisa
 *
 */

?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/template-parts/misc/slider_page_2.php"); ?>
<span style="margin-top:25px;"></span>
<?php include (TEMPLATEPATH . "/template-parts/services/service/text_sidebar.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/sidebar_visa.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_testimonial.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/career/detail/form_erasmus.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/services/service/service_faq.php"); ?>
<p class="pre-double-galler">ACTIVITIES & EVENTS</p>
<?php 
if ( wp_is_mobile() ){
    include (TEMPLATEPATH . "/template-parts/misc/gallery_1_row.php");?>
    </div>
<?php
} else {
    include (TEMPLATEPATH . "/template-parts/misc/gallery_1_row.php");
}

?>
<div class="row row-chat">
    <div class="col-12">
        <div class="cta-app">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-weight:300;margin-bottom:72px;font-size:32px;">Not finding what you are looking for?<br>Chat with our bot</h2>
                </div>
                <div class="col-12">
                    <a href="#">Click here</a>
                </div>
            </div>      
        </div>  
    </div>
</div>

<?php get_footer(); ?>