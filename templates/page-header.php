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
<?php
if ( has_post_thumbnail() ) {
	$img_url = get_the_post_thumbnail_url( $post->ID, 'full' );
} else {
	$img_url = get_template_directory_uri().'/dist/images/banner-placeholder.jpg';
}
?>
<div class="page-header" style="background-image:url(<?php echo $img_url; ?>);background-size:cover;">
    <!-- <div class="title">
        <h1>
            <?php //echo get_the_title(); ?>
        </h1>
    </div> -->
</div>
</header>