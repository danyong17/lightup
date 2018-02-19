<div class="brief-section first" style="background-image:url(<?php echo get_field('s1_background_image') ?>);background-size:cover;">
	<div class="container">
		<?php if(get_field('brief_title')) { ?>
			<h2><?php echo get_field('brief_title'); ?></h2>
		<?php } ?>
		<?php if(get_field('brief_content')) { ?>
			<div class="content">
			<?php echo get_field('brief_content'); ?>
			</div>
		<?php } ?>
		<?php if(get_field('brief_button_label')) { ?>
			<a href="<?php echo get_field('brief_button_link'); ?>" class="btn-g"><?php echo get_field('brief_button_label'); ?></a>
		<?php } ?>
	</div>
</div>
<div class="brief-section second">
	<div class="container">
		<?php if(get_field('s2_title')) { ?>
			<h2><?php echo get_field('s2_title'); ?></h2>
		<?php } ?>
		<?php if(get_field('s2_content')) { ?>
			<div class="content">
			<?php echo get_field('s2_content'); ?>
			</div>
		<?php } ?>
		<?php if(get_field('s2_button_label')) { ?>
			<a href="<?php echo get_field('s2_button_link'); ?>" class="btn-g"><?php echo get_field('s2_button_label'); ?></a>
		<?php } ?>
	</div>
</div>