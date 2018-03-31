<header>
<div class="navigation-container">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<?php if(get_field('logo_border_color','option')) {
					$blogo = 'border:1px solid '.get_field('logo_border_color','option').';';
				} else {
					$blogo = '';
				} ?>
				<?php if(get_field('logo_padding','option')) {
					$plogo = 'padding:'.get_field('logo_padding','option').';';
				} else {
					$plogo = '';
				} ?>
				<?php if(get_field('logo_background_color','option')) {
					$lbgc = 'style="background-color:'.get_field("logo_background_color","option").';'.$blogo.''.$plogo.'"';
				} else {
					$lbgc = '';
				} ?>
				<a href="<?php echo get_site_url(); ?>" class="logo-url" <?php echo $lbgc; ?>><img src="<?php echo get_field('logo','option'); ?>" class="img-fluid" alt=""></a>
			</div>
			<div class="col-md-8 col-sm-6">
				<?php wp_nav_menu( array('menu'=>'Main Menu') ); ?>
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