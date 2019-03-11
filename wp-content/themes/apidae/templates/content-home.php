<div class="section-wrapper mb-lg-5 pb-lg-3">
	<div class="row no-gutters main-banner-wrapper">
		<div class="main-banner-control"> <a href="javascript:;" class="prev"></a> <a href="javascript:;" class="next"></a> </div>
		<div class="col-12 main-banner">
			<?php
				$hero_banners = get_field('hero_banner');
				
				if( $hero_banners ): 
					foreach( $hero_banners as $hero_banner):
						$desktop_image = get_field('desktop_image', $hero_banner);
						$mobile_image = get_field('mobile_image', $hero_banner);
						$text_position = get_field('text_position', $hero_banner);
						
						echo '<div class="banner-item '.$text_position.'">';
							echo '<img src="'.$mobile_image['url'].'" class="img-fluid hidden-lg-up" />';
							echo '<img src="'.$desktop_image['url'].'" class="img-fluid hidden-md-down" />';
							echo '<div class="text-container">';
								echo apply_filters('the_content', get_post_field('post_content', $hero_banner));
							echo '</div>';
						echo '</div>';
					endforeach; 
				endif; 
			?>
		</div>
	</div>
</div>
<?php
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
		
			if ( get_row_layout() == 'our_story' ):
				$title = get_sub_field('title');
				$content = get_sub_field('content');
			
			
				echo '<div class="section-wrapper module__text-with-img">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="row">';
									echo '<div class="col-12"><h2>'.$title.'</h2></div>';
								echo '</div>';
								echo '<div class="row">';
									echo '<div class="col-12 col-lg-8 offset-lg-4 col-xl-9 offset-xl-3">';
									echo $content;
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endif;
			
			if ( get_row_layout() == 'milestone' ):
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				$image_left = get_sub_field('image_left');
				$image_right = get_sub_field('image_right');
			
				echo '<div class="section-wrapper module__shadow-top mt-lg-5">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="content-container milestone">';
									echo '<h2>'.$title.'</h2>';
									echo '<div class="row justify-content-md-center">';
										echo '<div class="col-12 col-lg-10">';
											echo '<div class="row justify-content-md-center">';
												echo '<div class="col-lg-5 hidden-md-down mt-lg-5 pt-lg-5">';
													echo '<img src="'.$image_left['url'].'" class="img-fluid" />';
												echo '</div>';
												echo '<div class="col-12 col-lg-5 offset-lg-1">';
													echo '<div class="hidden-md-down pb-lg-4">';
														echo '<img src="'.$image_right['url'].'" class="img-fluid" />';
													echo '</div>';
													echo $content;
													echo '<div class="hidden-lg-up">';
														echo '<img src="'.$image_left['url'].'" class="img-fluid" />';
													echo '</div>';
													echo '<div class="hidden-lg-up">';
														echo '<img src="'.$image_right['url'].'" class="img-fluid" />';
													echo '</div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endif;
			
			if ( get_row_layout() == 'instagram' ):
				$title = get_sub_field('title');
				$content = get_sub_field('content');
			
				echo '<div class="section-wrapper module__shadow-top module__instagram">';
					echo '<div class="container-fluid px-5 px-md-3">';
						echo '<div class="row justify-content-center h-100">';
							echo '<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">';
								echo '<div class="content-container">';
									echo '<h2>'.$title.'</h2>';
									echo do_shortcode('[instagram-feed]');
									echo '<div class="content-text mt-lg-4">';
										echo $content;
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
