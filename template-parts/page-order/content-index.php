<?php

$partners	=	function_exists('get_field') ? get_field('sc_footer_our_partner_list', 'option') : null;

foreach ($partners as $value) {
	if ($value['sc_footer_partner_name'] == 'Bukalapak') :
		$bukalapak[]	=	$value;
	elseif($value['sc_footer_partner_name'] == 'Tokopedia')	:
		$tokopedia[]	=	$value;
	endif;	
}

?>

		<div class="canal_jumbotron" >
			<div class="overlay">
			</div>
			<div class="wrapper">
				<h1 class="century">Order</h1>
				
			</div>
		</div>

		<div class=" canal_body container">
			<div class="content_wrapper">
				<div class="content">
					<div class="text text-center">
						Untuk saat ini produk Nani's Sambal Cakalang tersedia dan dapat dibeli di beberapa toko online berikut ini

						<div class="merchat_wrapper">
							<div class="btn_wrapper">
								<a href="<?= $tokopedia[0]['sc_footer_partner_link'] ?>" class="btn_a" target="_blank">
									<img src="<?= get_template_directory_uri() ?>/assets/images/logo_tokopedia2.png" alt="Tokopedia">
								</a>
							</div>
							<div class="btn_wrapper" >
								<a href="<?= $bukalapak[0]['sc_footer_partner_link'] ?>" class="btn_a" target="_blank">
									<img src="<?= get_template_directory_uri() ?>/assets/images/logo_bukalapak_red.png" alt="Bukalapak">
								</a>
							</div>
							
						</div>

						
					</div>
				</div>
			</div>
			
		</div>
