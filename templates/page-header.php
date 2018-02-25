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
if ( has_post_thumbnail() ) {
	$img_url = get_the_post_thumbnail_url( $post->ID, 'full' );
} else {
	$img_url = get_template_directory_uri().'/dist/images/banner-placeholder.jpg';
}
?>
<div class="page-header" style="background-image:url(<?php echo $img_url; ?>);background-size:cover;">
    <div class="title">
        <h1>
            <?php echo get_the_title(); ?>
        </h1>
    </div>
</div>
</header>