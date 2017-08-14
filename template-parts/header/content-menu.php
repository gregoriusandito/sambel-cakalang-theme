<?php

$logo_url   =   function_exists('get_field') ? get_field('sc_menu_logo', 'option') : null;

?>
		<nav id="navbar">
			<div class="container">
				<div class="row">
					<ul id="ul_menu" class="hidden-sm hidden-xs">
						<li>
							<a href="<?= get_permalink( get_page_by_path( 'utama' )->ID ) ?>">
								<span class="text">
									Home
								</span>
							</a>
						</li>
						<li >
							<a href="<?= get_permalink( get_page_by_path( 'about' )->ID ) ?>">
								<span class="text">
									About Us
								</span>
							</a>
						</li>
						<li>
							<a href="<?= get_permalink( get_page_by_path( 'products' )->ID ) ?>">
								<span class="text">
									Products
								</span>
							</a>
						</li>

						<li class="li_logo">
							<a href="<?= get_permalink( get_page_by_path( 'utama' )->ID ) ?>" class="logo_wrapper">
								<img id="logo_company_nav" src="<?= $logo_url ?>" alt="">
							</a>
						</li>

						<li>
							<a href="<?= get_permalink( get_page_by_path( 'testimonies' )->ID ) ?>">
								<span class="text">
									Testimonies
								</span>
							</a>
						</li>

						
						<li>
							<a href="<?= get_permalink( get_page_by_path( 'order' )->ID ) ?>">
								<span class="text">
									Order
								</span>
							</a>
						</li>

						<li>
							<a href="<?= get_permalink( get_page_by_path( 'faq' )->ID ) ?>">
								<span class="text">
									FAQ
								</span>
							</a>
						</li>
					</ul>
					<a id="nav_btn" href="#" class="hidden-medium">
						<div class="navIconWrapper">
						    <span></span>
						    <span></span>
						    <span></span>
						    <span></span>
						  </div>
					</a>
					
				</div>
			</div>
		</nav>

		<div class="menu_modal">
			<ul class="moblemenu_ul">
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'utama' )->ID ) ?>">Home</a>
				</li>
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'about' )->ID ) ?>">About Us</a>
				</li>
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'products' )->ID ) ?>">Products</a>
				</li>
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'testimonies' )->ID ) ?>">Testimonies</a>
				</li>
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'order' )->ID ) ?>">Order</a>
				</li>
				<li>
					<a href="<?= get_permalink( get_page_by_path( 'faq' )->ID ) ?>">FAQ</a>
				</li>
			</ul>
		</div>
