<?php

$args           =   array(
                        'category_name'     =>  'standard',
                        'post_type'         =>  'testimonial',
                        'post_status'       =>  'publish',
                        'posts_per_page'    =>  -1,
                    );
                    
$the_query      =   new WP_Query( $args );

if ( $the_query->have_posts() ) :
    
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        
		$attachment_id			=   get_post_thumbnail_id();
        $attachment_post        =   $attachment_id ? get_post( $attachment_id ) : null;
        $attachment_post_meta   =   $attachment_id ? get_post_meta( $attachment_id ) : null;
        $attachment_size        =   'large';        

        $res = array(
			'image'    =>  $attachment_id ? wp_get_attachment_image_src( $attachment_id, $attachment_size )[0] : null,
        );
        
        $testimonials[]         =   $res;
        
    endwhile;
endif;

wp_reset_postdata();

?>

<?php if ( $testimonials ) : ?>

	<div class="canal_jumbotron" >
		<div class="overlay">
		</div>
		<div class="wrapper">
			<h1 class="century">Testimonies</h1>
			
		</div>
	</div>

	<div class=" canal_body container">
		<div class="content_wrapper">
			<div class="content gallery_content">
				<div class="row testimonies_gallery">
					<?php foreach( $testimonials as $value ) : ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col_testimoni_image">
							<div class="img_wrapper">
								<div class="hover_overlay">
									<div class="btn_view">
										<span class="text">
											VIEW
										</span>
									</div>
								</div>
								<img class="img_file" src="<?= $value['image'] ?>" alt="">
							</div>
						</div>					
					<?php endforeach; ?>
				</div>
				<!--<div class="btn_wrapper">-->
				<!--	<a href="#" class="btn_a">-->
				<!--		LOAD MORE-->
				<!--	</a>-->
				<!--</div>-->
			</div>
		</div>
		
	</div>

	<div class="custom_modal">
		<img class="close_modal" src="<?= get_template_directory_uri() ?>/assets/images/close_white.png" alt="Close">
		<div class="image_wrapper">
			<img src="" class="image_item">
		</div>
	</div>


<?php endif; ?>

