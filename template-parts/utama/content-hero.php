<?php
	//image
	$queried_object	=	get_queried_object();
	$jumbotron_url	=	wp_get_attachment_url( get_post_thumbnail_id($queried_object->ID) );
	
	//text
	$welcome_text	=	function_exists('get_field') ? get_field('sc_welcome_text') : '';
	$main_text		=	function_exists('get_field') ? get_field('sc_main_text') : '';
	$main_text_2	=	function_exists('get_field') ? get_field('sc_main_text_line_2') : '';
?>
		<div id="jumbotron" style="background-image: url('<?= $jumbotron_url ?>');">>
			<div class="overlay">
			</div>
			<div id="welcome_message_container">
				<div id="greating_text"> <?= $welcome_text ?> </div>
				<h1 ><?= $main_text ?> <br/> 
					<?= $main_text_2 ?>
				</h1>

				<div class="btn_wrapper">
					<a href="<?= get_permalink( get_page_by_path( 'order' )->ID ) ?>" class="btn_a">
						PESAN SEKARANG
					</a>
				</div>

			</div>
		</div>