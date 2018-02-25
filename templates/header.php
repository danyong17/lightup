<header>
<div class="navigation-container">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<a href="<?php echo get_site_url(); ?>" class="logo-url"><img src="<?php echo get_field('logo','option'); ?>" class="img-fluid" alt=""></a>
			</div>
			<div class="col-8">
				<?php wp_nav_menu( array('Main Menu') ); ?>
			</div>
		</div>
	</div>
</div>
<div class="banner">
	<div class="overlay"></div>
	<?php if (get_field('tagline')) { ?>
	<h1 class="tagline">
		<?php echo get_field('tagline'); ?>
	</h1>
	<?php } ?>
	<?php echo do_shortcode(get_field('banner_slider')); ?>

	<div class="btn-container">
		<?php if(get_field('button_1_label')) { ?>
		<a href="<?php echo get_field('button_1_link'); ?>" class="btn-lf btn-l"><?php echo get_field('button_1_label'); ?></a>
		<?php } ?>
		<?php if(get_field('button_2_label')) { ?>
		<a href="<?php echo get_field('button_2_link'); ?>" class="btn-lf btn-r"><?php echo get_field('button_2_label'); ?></a>
		<?php } ?>
	
	</div>
</div>
</header>