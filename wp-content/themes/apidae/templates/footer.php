<?php
	$home_pageID = get_option('page_on_front');
	
	$footer_pageID = get_field('footer', $home_pageID);
	
	$social_media_rows = get_field('social_media', $footer_pageID[0]);
	$stay_in_touch = get_field('stay_in_touch', $footer_pageID[0]);
	$spread_the_love = get_field('spread_the_love', $footer_pageID[0]);
	$contact = get_field('contact', $footer_pageID[0]);
	
	
?>

<a href="javascript:;" class="btn_back-to-top"></a>
<div class="section-wrapper module__shadow-top module__follow-us">
	<div class="container-fluid px-5 px-md-3">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="content-container pb-5">
							<ul>
								<li>FOLLOW US</li>
								<?php
									if($social_media_rows):
										foreach($social_media_rows as $row):
											echo '<li><a href="'.$row['url'].'" target="_blank"><i class="fab '.$row['platform'].'"></i></a></li>';
										endforeach;
									endif;
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="content-info">
	<div class="container-fluid px-5 px-md-3">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-2 module__footer-nav footer__module pl-lg-5">
						<h2>APIDAE</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</div>
					
					<div class="col-12 col-lg-7">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-6 footer__module px-lg-4">
								<?php
									echo '<h2>'.$stay_in_touch['title'].'</h2>';
									
									echo $stay_in_touch['content'];
								?>
								<!--MAILCHIMP-->
								<div class="email-input">
									<input type="email" class="footer-email" placeholder="STAY IN TOUCH" />
								</div>
							</div>
				
							<div class="col-12 col-lg-6 footer__module px-lg-4">
								<?php
									echo '<h2>'.$spread_the_love['title'].'</h2>';
									
									echo $spread_the_love['content'];
								?>
								<!--MAILCHIMP-->
								<div class="email-input">
									<input type="email" class="footer-email" placeholder="ENTER YOUR FRIEND'S EMAIL" />
								</div>
							</div>
							
							<div class="col-12 module__privacy footer__module no-padding hidden-md-down text-center">
								<span>&copy;<?php echo date("Y"); ?> Apidae All Rights Reserved.</span>
								<?php wp_nav_menu( array( 'theme_location' => 'privacy-menu' ) ); ?>
							</div>
						</div>
					</div>
		
					<div class="col-12 col-lg-3 col-xl-2 footer__module pr-lg-5">
						<?php echo $contact['content']; ?>
						<div class="preferred_partner">
							<div class="partner-text"><?=$contact['preferred_partner']['text'];?></div> <img src="<?=$contact['preferred_partner']['logo']['url']?>" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-12 module__privacy footer__module hidden-lg-up">
				<p>&copy;<?php echo date("Y"); ?> Apidae All Rights Reserved.</p>
				<?php wp_nav_menu( array( 'theme_location' => 'privacy-menu' ) ); ?>
			</div>
		</div>
	</div>
</footer>
