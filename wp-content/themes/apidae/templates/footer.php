<a href="javascript:;" class="btn_back-to-top"></a>
<div class="section-wrapper module__shadow-top module__follow-us">
	<div class="container-fluid">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-sm-8 col-md-10 col-lg-11 col-xl-9 position-relative">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="content-container pb-5">
							<ul>
								<li>FOLLOW US</li>
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="content-info">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-10">
				<div class="row">
					<div class="col-12 col-lg-3 module__footer-nav footer__module">
						<h2>APIDAE</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</div>
					
					<div class="col-12 col-lg-6">
						<div class="row">
							<div class="col-12 col-lg-6 footer__module">
								<h2>STAY IN TOUCH</h2>
								<p>Join our mailing list for news on our latest updates, designs & promotions. A bundle of joy in email form.</p>
								<!--MAILCHIMP-->
								<div class="email-input">
									<input type="email" class="footer-email" />
								</div>
							</div>
				
							<div class="col-12 col-lg-6 footer__module">
								<h2>SPREAD THE LOVE</h2>
								<p>Share Apidae with a friend and we'll give you 10% off your next purchase when you both spend more than HK$1,000.</p>
								<!--MAILCHIMP-->
								<div class="email-input">
									<input type="email" class="footer-email" />
								</div>
							</div>
							
							<div class="col-12 module__privacy footer__module no-padding hidden-md-down">
								<span>&copy;<?php echo date("Y"); ?> Apidae All Rights Reserved.</span>
								<?php wp_nav_menu( array( 'theme_location' => 'privacy-menu' ) ); ?>
							</div>
						</div>
					</div>
		
					<div class="col-12 col-lg-3 footer__module">
						<h2>CONTACT</h2>
						<p>Tel: +852 3996 9956<br />Email: <a href="mailto:info@apidae.hk">info@apidae.hk</a></p>
						
						<p><strong>BY APPOINTMENT ONLY</strong><br />
						Room 826-828, One Island South<br />
						2 Heung Yip Road<br />
						Wong Chuk Hang, Hong Kong</p>
						
						<div class="preferred_partner">
							<div class="partner-text">Preferred Partner:</div> <img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo-mothercourt.png" />
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
