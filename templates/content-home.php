<div class="brief-section first" style="background-image:url(<?php echo get_field('s1_background_image') ?>);background-size:cover;">
	<div class="container">
		<?php if(get_field('brief_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('brief_title'); ?></h2>
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
			<h2 class="sec-title"><?php echo get_field('s2_title'); ?></h2>
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
<div class="solar-works-section">
	<div class="container">
		<?php if(get_field('s2_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('how_title'); ?></h2>
		<?php } ?>
		<div class="content">
			<?php echo get_field('how_content'); ?>
		</div>
  <!-- Nav tabs -->
  <ul class="nav" role="tablist">
    <li role="presentation" class="active"><a href="#morning" aria-controls="home" role="tab" data-toggle="tab" class="morn trans">
		<i class="fa fa-sun-o" aria-hidden="true"></i><br /><?php echo get_field('time_label_1'); ?>
	</a></li>
    <li role="presentation" class="mid"><a href="#afternoon" aria-controls="profile" role="tab" data-toggle="tab" class="noon trans">
		<i class="fa fa-sun-o" aria-hidden="true"></i><br /><?php echo get_field('time_label_2'); ?>
	</a></li>
    <li role="presentation"><a href="#night" aria-controls="messages" role="tab" data-toggle="tab" class="night trans">
		<i class="fa fa-moon-o" aria-hidden="true"></i><br /><?php echo get_field('time_label_3'); ?>
	</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="morning">
		<div class="image">
			<img src="<?php echo get_field('morning_image'); ?>" alt="" class="img-fluid mx-auto d-block">
		</div>
		<div class="desc">
			<?php echo get_field('morning_description'); ?>
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="afternoon">
		<div class="image">
				<img src="<?php echo get_field('afternoon_image'); ?>" alt="" class="img-fluid mx-auto d-block">
			</div>
			<div class="desc">
				<?php echo get_field('afternoon_description'); ?>
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="night">
		<div class="image">
			<img src="<?php echo get_field('night_image'); ?>" alt="" class="img-fluid mx-auto d-block">
		</div>
		<div class="desc">
			<?php echo get_field('night_description'); ?>
		</div>
	</div>
  </div>
		
		
		</div>
</div>
<?php
if(get_field('profile_background_image')) {
	$profile_bg = get_field('profile_background_image');
} ELSE {
	$profile_bg = '';
}
?>
<div class="profile-video-section" style="background-image:url(<?php echo $profile_bg; ?>);background-size:cover;">
	<div class="inner">
		<div class="container">
			<?php if(get_field('profile_video_title')) { ?>
				<h2 class="sec-title"><?php echo get_field('profile_video_title'); ?></h2>
			<?php } ?>
			<?php if(get_field('video_fields')) { ?>
			<div class="row">
				<?php foreach(get_field('video_fields') as $vid) { ?>
					<div class="col-sm-4">
					<?php $url = $vid['youtube_links'];
					preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
					$vid = $matches[1];
					if($url) { ?>
						<div class="embed-container">
							<iframe src="https://www.youtube.com/embed/<?php echo $vid; ?>?showinfo=0&" frameborder="0" allowfullscreen></iframe>
						</div>
					<?php } ?>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>