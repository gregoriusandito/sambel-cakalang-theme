<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Sambal_Cakalang
 * @since Sambal Cakalang 1.0
 */
?>
<footer>
	<?php 
		get_template_part( 'template-parts/footer/content-footer', 'by' );
		get_template_part( 'template-parts/footer/content-footer', 'contact' );
	?>	
</footer>

<?php wp_footer(); ?>
</body>
</html>
