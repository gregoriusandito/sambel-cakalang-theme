<?php
/**
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
	get_template_part( 'template-parts/utama/content', 'hero' );
	get_template_part( 'template-parts/utama/content', 'about' );
	get_template_part( 'template-parts/utama/content', 'product' );
	get_template_part( 'template-parts/utama/content', 'testimonials' );
	get_template_part( 'template-parts/utama/content', 'faq' );
?>

<div class="custom_modal">
	<img class="close_modal" src="<?= get_template_directory_uri() ?>/assets/images/close_white.png" alt="Close">
	<div class="image_wrapper">
		<img src="" class="image_item">
	</div>
</div>

<?php get_footer(); ?>
