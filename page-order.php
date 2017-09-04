<?php
/**
 * Template Name: Order Page
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Sambal_Cakalang
 * @since Sambal Cakalang 1.0
 */

get_header(); ?>

<?php 
	get_template_part( 'template-parts/page-order/content', 'index' );
?>

<?php get_footer(); ?>
