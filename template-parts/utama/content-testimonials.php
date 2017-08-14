<?php

$args           =   array(
                        'category_name'     =>  'standard',
                        'post_type'         =>  'testimonial',
                        'post_status'       =>  'publish',
                        'posts_per_page'    =>  3,
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
	<div id="testmoni">
		<div class="overlay">
		</div>
		<div class="container">
			<h2>Testimonies</h2>
			<div class="row testimonies_gallery">
				<?php foreach ( $testimonials as $value ) : ?>
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
			
			<div class="btn_wrapper">
				<a href="<?= get_permalink( get_page_by_path( 'testimonies' )->ID ) ?>" class="btn_a">
					VIEW ALL
				</a>
			</div>
		</div>
	</div>
<?php endif; ?>
