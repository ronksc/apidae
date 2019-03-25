<header class="banner fixed-top" role="banner">
  <div class="container-fluid header-container">
  	<div class="row justify-content-center h-100">
		<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">
			<a class="brand" href="<?= esc_url(home_url('/')); ?>">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.png" class="img-fluid"/><?php //bloginfo('name'); ?>
			</a>
			
			<div class="row justify-content-center">
				<div class="col-12 col-lg-9 text-right hidden-lg-up">
					<div class="navbar-header">
					  <!--<a href="javascript:;" class="nav_toggle">
						<i class="fas fa-bars"></i>
						<i class="fas fa-times"></i>
					  </a>-->
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					  </button>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8 hidden-md-down">
					<?php
						if (has_nav_menu('primary_navigation')) :
						  wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav main-menu'));
						endif;
					  ?>
				</div>
			</div>
			<!--<div class="row no-gutters hidden-md-down">
				<div class="shadow_bottom pb-4"></div>
			</div>
			<div class="row hidden-md-up">
				<div class="shadow_bottom pb-4"></div>
			</div>-->
		</div>
    </div>
	<!--<nav class="collapse navbar-collapse" role="navigation">
	  <?php
		/*if (has_nav_menu('primary_navigation')) :
		  wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
		endif;*/
	  ?>
	</nav>-->
  </div>
  <div class="row nav-container visible-xs visible-sm hidden-md hidden-lg">
		<nav class="col-12 collapse navbar-collapse main-menu-mobile" role="navigation">
			<div class="mobile-menu-wrapper">
				<?php
					//Main menu
					if (has_nav_menu('primary_navigation')) :
					  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mobile-menu', 'depth' => 0));
					endif;
				?>
			</div>
		</nav>
	</div>
</header>