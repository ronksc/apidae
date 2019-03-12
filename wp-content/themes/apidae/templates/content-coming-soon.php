<?php
	$image_desktop = get_field('image_desktop');
	$image_mobile = get_field('image_mobile');
	$banner_text = get_field('banner_text');
	$content = get_field('content');
?>
<div class="section-wrapper module__feature-banner pt-5 pb-5 pb-lg-0 mb-5 mb-lg-5">
	<div class="container-fluid">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-sm-8 col-md-10 col-lg-11 position-relative">
				<div class="row no-gutters mb-4 mb-lg-5 pb-lg-2">
					<div class="col-12 banner-container">
						<img src="<?=$image_mobile['url']?>" class="img-fluid hidden-lg-up" />
						<img src="<?=$image_desktop['url']?>" class="img-fluid hidden-md-down" />
						<div class="text-wrapper">
							<div class="text-container"><?php echo $banner_text;?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 sign-up"><?php echo $content;?></div>
				</div>
			</div>
		</div>
	</div>
</div>