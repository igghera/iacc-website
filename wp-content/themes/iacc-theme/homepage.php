<?php
/**
 * Template Name: Homepage IACC
 * Description: The template for displaying the Homepage
 *
 */
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . "/template-parts/home/home_slider.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/home/home_boxes.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/home/install_app.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/home/home_news.php"); ?>
<?php include (TEMPLATEPATH . "/template-parts/home/home_featured.php"); ?>

<?php include (TEMPLATEPATH . "/template-parts/newsletter/newsletter_subscription.php"); ?>
<?php get_footer(); ?>