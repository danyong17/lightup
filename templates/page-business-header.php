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