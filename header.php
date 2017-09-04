<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Sambal_Cakalang
 * @since Sambal Cakalang 1.0
 */

?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta http-equiv="Copyright" content="Nani's Sambal Cakalang" />
	<meta name="author" content="Gregorius Andito Herjuno, Josep Nabu" />
	<meta name="language" content="Indonesia" />
	<meta name="webcrawlers" content="all" />
	<meta name="rating" content="general" />
	<meta name="spiders" content="all" />
	<meta name="robots" content="index, follow" />
	<meta name="theme-color" content="#000">	
	<?php wp_head(); ?>
</head>
	<body>
		
		<?php  
			
			is_front_page() ? get_template_part( 'template-parts/header/content', 'menu' ) : get_template_part( 'template-parts/header/content', 'menu-extend' ); 
		
		?>


