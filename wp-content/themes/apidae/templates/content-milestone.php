<div class="section-wrapper milestone-anchor mb-5 pt-5">
	<div class="container-fluid">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">
				<div class="row no-gutters anchor_wrapper justify-content-md-center">
					<div class="col-12">
						<ul>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="newborn">NEWBORN</a></li>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="1_3_months">1-3 MONTHS</a></li>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="4_6_months">4-6 MONTHS</a></li>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="4_8_months">4-8 MONTHS</a></li>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="1_2_years">1-2 YEARS</a></li>
							<li><a class="nav_anchor" href="javascript:;" data-anchor="2_years">2+ YEARS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
		
			if ( get_row_layout() == 'feature_text' ):
				$content = get_sub_field('content');
				
				echo '<div class="section-wrapper module__shadow-top feature-text">';
					echo '<div class="container-fluid">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row h-100 justify-content-center content-container">';
									echo '<div class="col-10 col-lg-10">';
										echo $content;
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == 'full_width_image' ):
				$image = get_sub_field('image');
				$anchor = get_sub_field('anchor');
				
				echo '<div class="section-wrapper feature-image" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row h-100 position-relative">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-12 px-5 px-md-3"> <img src="'.$image['url'].'" class="img-fluid" /> </div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == 'two_column_content_1' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_left = get_sub_field('content_left');
				$image_right = get_sub_field('image_right');
				$content_right = get_sub_field('content_right');
			
				echo '<div class="section-wrapper milestone-section-1" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-7">';
										echo $content_left;
										echo '<div class="hidden-md-down image-1-margin"> <img src="'.$image_left['url'].'" class="img-fluid hidden-md-down" /> </div>';
									echo '</div>';
									echo '<div class="col-12 hidden-lg-up">';
										echo '<div class="row no-gutters">';
											echo '<div class="col-6">';
												echo '<div class="mobile-image-left"> <img src="'.$image_left['url'].'" class="img-fluid" /> </div>';
											echo '</div>';
											echo '<div class="col-6">';
												echo '<div class="mobile-image-right"> <img src="'.$image_right['url'].'" class="img-fluid" /> </div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
									echo '<div class="col-lg-5">';
										echo '<div class="text-margin-left">';
											echo '<div class="hidden-md-down image-2-margin"> <img src="'.$image_right['url'].'" class="img-fluid hidden-md-down" /> </div>';
											echo '<div class="headline-text">';
												echo $content_right;
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == 'color_bg_section_1' ):
				$anchor = get_sub_field('anchor');
				$image_right = get_sub_field('image_right');
				$content = get_sub_field('content');
				
				echo '<div class="section-wrapper milestone-color-section color-section-1" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6 order-first order-lg-last image-1-margin"> <img src="'.$image_right['url'].'" class="img-fluid" /> </div>';
									echo '<div class="col-lg-6 order-last order-lg-first">';
										echo '<div class="headline-text mr-lg-5">'.$content.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'two_column_content_2' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_left = get_sub_field('content_left');
				$image_right = get_sub_field('image_right');
				$content_right = get_sub_field('content_right');
				
				
				echo '<div class="section-wrapper milestone-section-2 mt-lg-5 pt-lg-5" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-7 order-last order-lg-first">';
										echo '<img src="'.$image_left['url'].'" class="img-fluid hidden-md-down" />';
										echo '<img src="'.$image_right['url'].'" class="img-fluid hidden-lg-up" />';
										echo '<div class="text-margin-left">';
											echo '<div class="headline-text mt-lg-3 mb-lg-5 pt-lg-3 pb-lg-5">'.$content_left.'</div>';
										echo '</div>';
									echo '</div>';
									echo '<div class="col-lg-5 order-first order-lg-last text-margin-top"> <img src="'.$image_left['url'].'" class="img-fluid hidden-lg-up" />';
										echo '<div class="text-margin-left-2">';
											echo '<div class="headline-text">'.$content_right.'</div>';
											echo '<div class="hidden-md-down"> <img src="'.$image_right['url'].'" class="img-fluid hidden-md-down" /> </div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'color_bg_section_with_overlapping' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_right = get_sub_field('content_right');
				
				echo '<div class="section-wrapper milestone-color-section overlay-margin bg_grey_texture" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6">';
										echo '<div class="mr-lg-5 "> <img src="'.$image_left['url'].'" class="img-fluid" /> </div>';
									echo '</div>';
									echo '<div class="col-lg-6 my-lg-auto">';
										echo '<div class="headline-text">'.$content_right.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'basic_image_text' ):
				$anchor = get_sub_field('anchor');
				$image_right = get_sub_field('image_right');
				$content_left = get_sub_field('content_left');
			
				echo '<div class="section-wrapper milestone-basic-text section-1" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-7 order-first order-lg-last my-auto">';
										echo '<div class="image-margin"> <img src="'.$image_right['url'].'" class="img-fluid" /> </div>';
									echo '</div>';
									echo '<div class="col-lg-5 order-last order-lg-first my-lg-auto">';
										echo '<div class="headline-text">'.$content_left.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == 'color_bg_section_with_vertical_margin' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_right = get_sub_field('content_right');
			
				echo '<div class="section-wrapper milestone-color-section image-overlay" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row position-relative zindex">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6"> <img src="'.$image_left['url'].'" class="img-fluid" /> </div>';
									echo '<div class="col-lg-6 my-lg-auto">';
										echo '<div class="headline-text ml-md-5">'.$content_right.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == 'basic_image_text_2' ):
				$anchor = get_sub_field('anchor');
				$image_right = get_sub_field('image_right');
				$content_left = get_sub_field('content_left');
			
				
				echo '<div class="section-wrapper milestone-basic-text section-2" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row position-relative">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-5 order-first order-lg-last"> <img src="'.$image_right['url'].'" class="img-fluid" /> </div>';
									echo '<div class="col-lg-7 order-last order-lg-first">';
										echo '<div class="d-flex h-100">';
											echo '<div class="headline-text my-lg-auto mx-lg-5">'.$content_left.'</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'basic_image_text_3' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_right = get_sub_field('content_right');
				
				echo '<div class="section-wrapper milestone-basic-text" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6"> <img src="'.$image_left['url'].'" class="img-fluid" /> </div>';
									echo '<div class="col-lg-6 my-lg-auto">';
										echo '<div class="headline-text ml-lg-5">'.$content_right.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				
			endif;
			
			if ( get_row_layout() == 'color_bg_section_with_extra_padding_bottom' ):
				$anchor = get_sub_field('anchor');
				$image_right = get_sub_field('image_right');
				$content_left = get_sub_field('content_left');
			
				echo '<div class="section-wrapper milestone-color-section extra-padding-bottom bg_grey_texture" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row position-relative">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6 order-first order-lg-last"> <img src="'.$image_right['url'].'" class="img-fluid" /> </div>';
									echo '<div class="col-lg-6 order-last order-lg-first my-lg-auto">';
										echo '<div class="headline-text mx-lg-5 my-lg-auto">'.$content_left.'</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endif;
			
			if ( get_row_layout() == 'basic_image_text_with_image_overlapping_top' ):
				$anchor = get_sub_field('anchor');
				$image_left = get_sub_field('image_left');
				$content_right = get_sub_field('content_right');
			
				echo '<div class="section-wrapper milestone-basic-text overlay-margin" id="'.$anchor['id'].'">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-10 position-relative">';
								echo '<div class="row">';
									echo '<div class="anchor">'.$anchor['text'].'</div>';
									echo '<div class="col-lg-6">';
										echo '<div class="image-margin"> <img src="'.$image_left['url'].'" class="img-fluid" /> </div>';
									echo '</div>';
									echo '<div class="col-lg-6 text-margin-top">';
										echo '<div class="headline-text ml-lg-5">'.$content_right.'</div>';
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