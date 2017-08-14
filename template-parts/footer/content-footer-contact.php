<?php
//contact
$email	=	function_exists('get_field') ? get_field('sc_footer_email', 'option') : null;
$phone	=	function_exists('get_field') ? get_field('sc_footer_phone', 'option') : null;
$sms	=	function_exists('get_field') ? get_field('sc_footer_sms', 'option') : null;
$wa		=	function_exists('get_field') ? get_field('sc_footer_whatsapp', 'option') : null;

//partners
$partners	=	function_exists('get_field') ? get_field('sc_footer_our_partner_list', 'option') : null;

//socmed
$facebook	=	function_exists('get_field') ? get_field('sc_footer_facebook', 'option') : null;
$instagram	=	function_exists('get_field') ? get_field('sc_footer_instagram', 'option') : null;

?>

			<div class="container">
				<div class="wrapper">
					<div class="cust_col col_left">
						<h4>Contact Us</h4>
						<div class="details">
							<div class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/email.png" alt="">
								</div>
								<div class="text">
									<?= $email ?>
								</div>
							</div>

							<div class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/phone.png" alt="">
								</div>
								<div class="text">
									<?= $phone ?>
								</div>
							</div>

							<div class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/sms.png" alt="">
								</div>
								<div class="text">
									<?= $sms ?>
								</div>
							</div>

							<div class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/whatsapp.png" alt="">
								</div>
								<div class="text">
									<?= $wa ?>
								</div>
							</div>

						</div>
					</div>
					<div class="cust_col col_left">
						<h4>Our Partners</h4>
						<div class="details">
							<?php foreach ($partners as $value) : ?>
								<div class="text">
									<a href="<?= $value['sc_footer_partner_link'] ?>"><?= $value['sc_footer_partner_name'] ?></a>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="cust_col col_left">
						<h4>SOCIAL NETWORKS</h4>
						<div class="details">
							<a class="block" href="<?= $facebook ?>" class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/facebook.png" alt="">
								</div>
								<div class="text">
									Facebook
								</div>
							</a>

							<a class="block" href="<?= $instagram ?>" class="item">
								<div class="icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/instagram.png" alt="">
								</div>
								<div class="text">
									Instagram
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
