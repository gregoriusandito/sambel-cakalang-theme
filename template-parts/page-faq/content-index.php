<?php

$forms	=	apply_filters('the_content', get_queried_object()->post_content);
$cat_args           =   array(
                        'taxonomy'      	=>  'category',
                    );	

$categories		=	get_categories($cat_args);
$faq_categories	=	array();

//save faq- slug
foreach( $categories as $cat ) :
	if ( preg_match( "/faq-/i", $cat->slug ) ) :
		$faq_categories[] = $cat;
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

<div class="canal_jumbotron" >
	<div class="overlay">
	</div>
	<div class="wrapper">
		<h1 class="century">Frequently Ask Questions (FAQ)</h1>
		
	</div>
</div>

<div class=" canal_body container">
	<div class="content_wrapper">
		<div class="content">
			<div class="text">
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
				<div class="topic_wrapper">
					<h3 class="topic_title_faq century">Tidak menemukan yang Anda cari?</h3>				
					<h4 class="item_question">Silahkan ajukan pertanyaan melalui form di bawah ini</h4>
					<?= $forms ?>
				</div>	
			</div>
		</div>
	</div>
	
</div>
