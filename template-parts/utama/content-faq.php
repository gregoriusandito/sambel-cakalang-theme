<?php

$cat_args           =   array(
                        'taxonomy'      	=>  'category',
                    );	

$categories		=	get_categories($cat_args);
$faq_categories	=	array();
$counter = 0;
//save faq- slug
foreach( $categories as $cat ) :
	if ( preg_match( "/faq-/i", $cat->slug ) && $counter < 2 ) :
		$faq_categories[] = $cat;
		$counter++;
	endif;	
endforeach;

$full_faq        =   array();

//start query
foreach( $faq_categories as $faq_cat ) :
	
	$args           =   array(
	                        'category_name'     =>  $faq_cat->slug,
	                        'post_type'         =>  'faqs',
	                        'post_status'       =>  'publish',
	                        'posts_per_page'    =>  -1,
	                    );
	                    
	$the_query      =   new WP_Query( $args );
	
    $res     =   array(
                            'name'  => $faq_cat->name,
                        );		
	
	
	if ( $the_query->have_posts() ) :
		
		$items	=	array();
		    
	    while ( $the_query->have_posts() ) :
	        $the_query->the_post();
			
	        $items[] = array(
				'question'		=>  function_exists('get_field') ? get_field('sc_faq_question') : null,
				'answer'		=>  function_exists('get_field') ? get_field('sc_faq_answer') : null,
	        );
	        
	    endwhile;
	    
	    $res['detail'] = $items;
	    
	endif;		
	
	$full_faq[] = $res;
	
	wp_reset_postdata();
endforeach;

?>
		<div id="faq">
			<div class="container">
				<h2 class="black_line">Frequently Ask Questions</h2>
				<div class="left_child">
					
				</div>
				<div class="right_child">
					<?php if ( $full_faq ) : ?>
						<?php foreach ( $full_faq as $key => $part_faq ) : ?>
							<div class="topic_wrapper">
								<h3 class="topic_title_faq century"><?= $part_faq['name'] ?></h3>
								<?php if ( $part_faq['detail'] ) : ?>
									<?php foreach ( $part_faq['detail'] as $child_key => $value ) : ?>
										<div class="item_question_answer">
											<h4 data-toggle="collapse" data-target="#question<?= $key+1 ?>-<?= $child_key+1 ?>" class="item_question"> 
												Q: <?= $value['question'] ?>
											</h4>
											<p id="question<?= $key+1 ?>-<?= $child_key+1 ?>" class="collapse item_answer">
												A: <?= $value['answer'] ?>
											</p>
										</div>								
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>	
					<?php endif ?>
					
					<div class="text-center">
						<div class="btn_wrapper">
							<a href="<?= get_permalink( get_page_by_path( 'faq' )->ID ) ?>" class="btn_a">
								VIEW ALL
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>