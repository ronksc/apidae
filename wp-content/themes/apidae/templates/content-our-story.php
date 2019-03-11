<?php
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
		
			if ( get_row_layout() == 'hero_banner' ):
				$desktop_image = get_sub_field('desktop_image');
				$mobile_image = get_sub_field('mobile_image');
				$content = get_sub_field('content');
				
				echo '<div class="section-wrapper module__feature-banner pt-5">';
					echo '<div class="container-fluid">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="row no-gutters justify-content-center">';
									echo '<div class="col-12 banner-container">';
										echo '<img src="'.$mobile_image['url'].'" class="img-fluid hidden-lg-up" />';
										echo '<img src="'.$desktop_image['url'].'" class="img-fluid hidden-md-down" />';
										echo '<div class="text-wrapper">';
											echo '<div class="text-container">';
												echo $content;
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'two_column_text_with_image' ):
				$image = get_sub_field('image');
				$image_position = get_sub_field('image_position');
				$content = get_sub_field('content');
				
				echo '<div class="section-wrapper module__two-column-text-with-img">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="row justify-content-center">';
									echo '<div class="col-lg-11 px-lg-4">';
										echo '<div class="row h-100">';
											$orderLast = ($image_position == 'left') ? "order-lg-last":'';
											echo '<div class="col-12 col-lg-7 text-wrapper '.$orderLast.'">';
												echo '<div class="text-container ml-lg-5">';
													echo $content;
												echo '</div>';
											echo '</div>';
											$orderFirst = ($image_position == 'left') ? "order-lg-first":'';
											echo '<div class="col-12 col-lg-5 img-container '.$orderFirst.'">';
												echo '<img src="'.$image['url'].'" class="img-fluid" />';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if( get_row_layout() == 'two_column_text_with_large_image' ):
				$image = get_sub_field('image');
				$content = get_sub_field('content');
			
				echo '<div class="section-wrapper module__two-column-text-with-img with-margin">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="row justify-content-center">';
									echo '<div class="col-lg-11 px-lg-4">';
										echo '<div class="row h-100">';
											echo '<div class="col-12 col-lg-4 text-wrapper order-lg-last">';
												echo '<div class="text-container pl-lg-5">';
													echo $content;
												echo '</div>';
											echo '</div>';
											echo '<div class="col-12 col-lg-8 img-container padding-small order-lg-first">';
												echo '<img src="'.$image['url'].'" class="img-fluid" />';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if( get_row_layout() == 'two_column_text_with_large_content' ):
				$image = get_sub_field('image');
				$content = get_sub_field('content');
			
				echo '<div class="section-wrapper module__two-column-text-with-img">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="row justify-content-center">';
									echo '<div class="col-lg-11 px-lg-4">';
										echo '<div class="row h-100">';
											echo '<div class="col-12 col-lg-6 text-wrapper">';
												echo '<div class="text-container">';
													echo $content;
												echo '</div>';
											echo '</div>';
											echo '<div class="col-12 col-lg-6 img-container right">';
												echo '<img src="'.$image['url'].'" class="img-fluid" />';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
		endwhile;
		
	endif;
?>