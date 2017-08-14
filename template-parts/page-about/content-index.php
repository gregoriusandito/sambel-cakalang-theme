<?php
	
	$queried_object	=	get_queried_object();

?>

		<div class="canal_jumbotron" >
			<div class="overlay">
			</div>
			<div class="wrapper">
				<h1 class="century">About Us</h1>
			</div>
		</div>

		<div class=" canal_body container">
			<div class="content_wrapper">
				<div class="content">
					<?= $queried_object->post_content ?>
				</div>
			</div>
			
		</div>
