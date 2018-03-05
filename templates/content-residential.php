<?php if(get_field('background_image')) { ?>
    <?php $sbg1 = get_field('background_image'); ?>
<?php } ?>
<div class="how-it-works" style="background-image:url(<?php echo $sbg1; ?>);background-size:cover;">
    <div class="inner">
        <div class="container">
            <?php if(get_field('s1_title')) { ?>
            <h2 class="sec-title"><?php echo get_field('s1_title'); ?></h2>
            <?php } ?>
            <?php if(get_field('s1_content')) { ?>
                <?php echo get_field('s1_content'); ?>
            <?php } ?>
        </div>
    </div>
</div>
<div class="solar-works-section residential">
	<div class="container">
		<?php if(get_field('how_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('how_title'); ?></h2>
		<?php } ?>
		<div class="content">
			<?php echo get_field('how_content'); ?>
		</div>

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
<div class="steps-to-solar">
	<div class="description-container">
		<div class="container">
			<?php if(get_field('steps_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('steps_title'); ?></h2>
			<?php } ?>
			<?php if(get_field('steps_content')) { ?>
				<div class="content"><?php echo get_field('steps_content'); ?></div>
			<?php } ?>
		</div>
	</div>
	<?php if(get_field('steps')) { ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php $count = 1; ?>
        <?php foreach(get_field('steps') as  $step) { ?>
            <div class="swiper-slide" style="background-image:url(<?php echo $step['image']; ?>);">
                <div class="container">
                    <div class="desc">
                        <div class="count"><?php echo $count; ?></div>
                        <?php if($step['label']) { ?>
                        <h3><?php echo $step['label']; ?></h3>
                        <?php } ?>
                        <?php if($step['text']) { ?>
                            <p><?php echo $step['text']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php $count++; } ?>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php } ?>
    <div class="roof"></div>
</div>