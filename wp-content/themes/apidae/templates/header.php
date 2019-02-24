<header class="banner fixed-top" role="banner">
  <div class="container header-container">
  	<div class="row">
		<div class="col-6 col-md-3">
			<a class="brand" href="<?= esc_url(home_url('/')); ?>">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.png" class="img-fluid"/><?php //bloginfo('name'); ?>
			</a>	
		</div>
		<div class="col-6 col-md-9 text-right hidden-lg-up">
			
			<div class="navbar-header">
			  <a href="javascript:;" class="nav_toggle">
			  	<i class="fas fa-bars"></i>
				<i class="fas fa-times"></i>
			  </a>
			</div>
		</div>
		
		<div class="col-md-9 hidden-md-down">
			<?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav main-menu'));
				endif;
			  ?>
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