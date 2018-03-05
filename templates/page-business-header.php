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
<?php
if ( get_field('s1_background_image') ) {
	$img_url = get_field('s1_background_image');
} else {
	$img_url = get_template_directory_uri().'/dist/images/banner-placeholder.jpg';
}
?>
<div class="business-header" style="background-image:url(<?php echo $img_url; ?>);background-size:cover;">
    <h1><?php echo get_field('s1_text'); ?></h1>
    <div class="btn-container">
        <?php if (get_field('s1_button_label')) { ?>
        <a href="<?php echo get_field('s1_button_link'); ?>" class="btn-r btn-lf"><?php echo get_field('s1_button_label'); ?></a>
        <?php } ?>
    </div>
</div>
</header>