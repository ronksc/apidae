<?php
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
		
			if ( get_row_layout() == 'feature_text' ):
				$content = get_sub_field('content');
				$booking_link = get_sub_field('booking_link');
								
				echo '<div class="section-wrapper feature-text pt-5">';
					echo '<div class="container-fluid">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row justify-content-center">';
									echo '<div class="col-10 col-lg-9 col-xl-7">';
										echo $content;
										echo '<div class="mt-3 mb-4 mt-lg-4 mb-lg-5">';
											echo '<a href="'.$booking_link['url'].'">'.$booking_link['text'].'</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'two_columns_image' ):
				$image_left = get_sub_field('image_left');
				$image_right = get_sub_field('image_right');
				
				echo '<div class="section-wrapper feature-image mb-5 pb-lg-4">';
					echo '<div class="container-fluid px-4">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row h-100">';
									echo '<div class="col-12 col-lg-6 mb-5 mb-lg-0 pr-lg-5">';
										echo '<img src="'.$image_left['url'].'" class="img-fluid" />';
									echo '</div>';
									echo '<div class="col-12 col-lg-6 mb-4 mb-lg-0 my-lg-auto pl-lg-5">';
										echo '<img src="'.$image_right['url'].'" class="img-fluid" />';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'contact_form' ):
				$content = get_sub_field('content');
				$form_title = get_sub_field('form_title');
				$form_shortcode = get_sub_field('form_shortcode');
				
				echo '<div class="section-wrapper contact-form">';
					echo '<div class="container-fluid px-4">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row justify-content-center">';
									echo '<div class="col-10 col-lg-8 introduction">'.$content.'</div>';
								echo '</div>';
								echo '<div class="row contact-form-container pt-lg-3">';
									echo '<div class="col-12">';
										echo '<h3>'.$form_title.'</h3>';
										echo '<div class="row justify-content-center">';
											echo '<div class="col-lg-7">';
												echo do_shortcode($form_shortcode);
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'testimonials' ):
				$title = get_sub_field('title');
				$testimonial_items = get_sub_field('testimonial_item');
			
				echo '<div class="section-wrapper module__shadow-top testimonials mb-lg-5">';
					echo '<div class="container-fluid">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
							echo '<div class="row content-container">';
								echo '<div class="col-12">';
									echo '<h2>'.$title.'</h2>';
								echo '</div>';
							echo '</div>';
							
								
								foreach($testimonial_items as $key => $testimonial_item):
									if($key == 0 || ($key+1)%4 == 0){
										echo '<div class="row mb-lg-5">';
									}
								
									$post_title = get_the_title( $testimonial_item );
									$username = get_field('username', $testimonial_item);
									$rating = get_field('rating', $testimonial_item);
									$content = get_field('content', $testimonial_item);
									
									echo '<div class="col-10 col-md-4 testimonials-item">';
										echo '<div class="testimonials-title">';
											echo '<h4>'.$post_title.'</h4>';
											echo '<span>'.$username.'</span>';
											echo '<div class="rating">';
												echo '<ul>';
													for($x = 0; $x < $rating; $x++):
														echo '<li><i class="fas fa-star"></i></li>';
													endfor;
												echo '</ul>';
											echo '</div>';
										echo '</div>';
										echo '<div class="testimonials-text">'.$content.'</div>';
									echo '</div>';
									
									if(($key+1)%3 == 0 || $key+1 == count($testimonial_items)){
										echo '</div>';
									}
									
								endforeach;	
								
							
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
		endwhile;
		
	endif;

?>