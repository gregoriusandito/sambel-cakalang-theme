<?php
//sambal image
$sambal_img_left	=	function_exists('get_field') ? get_field('sc_about_sambal_image_left') : null;
$sambal_img_right	=	function_exists('get_field') ? get_field('sc_about_sambal_image_right') : null;

//main image
$left_img			=	function_exists('get_field') ? get_field('sc_about_first_image') : null;
$right_img			=	function_exists('get_field') ? get_field('sc_about_second_image') : null;
$third_img			=	function_exists('get_field') ? get_field('sc_about_third_image') : null;

//desc
$left_img_desc		=	function_exists('get_field') ? get_field('sc_about_first_image_description') : null;
$right_img_desc		=	function_exists('get_field') ? get_field('sc_about_second_image_description') : null;
$third_img_desc		=	function_exists('get_field') ? get_field('sc_about_third_image_description') : null;

?>

		<div id="aboutus" class="container">
			<div class="decoration_wrapper">
				
				
			</div>
			<div id="back_container">
				<img src="<?= get_template_directory_uri() ?>/assets/images/top_left_poi.png" alt="Red Chilli" class="chilli_poi top_left">
				<div class="in_container">
					<div class="wrapper">
						<img src="<?= $sambal_img_left ?>" alt="Sambal Cakalang Merah" class="sambal_poi left">
						<img src="<?= $sambal_img_right ?>" alt="Sambal Cakalang Hijau" class="sambal_poi right">

					</div>
					
				</div>
				<img src="<?= get_template_directory_uri() ?>/assets/images/bottom_right_poi.png" alt="Red Chilli" class="chilli_poi bottom_right">
				<img src="<?= get_template_directory_uri() ?>/assets/images/bottom_right_poi_front.png" alt="Red Chilli" class="chilli_poi bottom_right_front">
			</div>

			<div id="middle_container">
				<div id="inside_container">
					<h2>About Us</h2>
					<div id="content">

						<div class="content_wrapper">
							<div class="float_left img_float">
								<img src="<?= $left_img ?>" alt="">
							</div>
							<div class="float_right txt_float">
								<?= $left_img_desc ?>
							</div>
						</div>

						<div class="content_wrapper">
							<div class="float_right img_float">
								<img src="<?= $right_img ?>" alt="">
							</div>
							<div class="float_left txt_float">
								<?= $right_img_desc ?>
							</div>
						</div>

						<div class="content_wrapper">
							<div class="float_left img_float">
								<img src="<?= $third_img ?>" alt="">
							</div>
							<div class="float_right txt_float">
								<?= $third_img_desc ?>
							</div>
						</div>

					</div>
				</div>

				
				
			</div>
		</div>