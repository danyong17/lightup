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
<div class="energy-cost-section">
    <div class="container">
        <?php if(get_field('energy_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('energy_title'); ?></h2>
		<?php } ?>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo get_field('energy_image'); ?>" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 align-self-center">
                <?php echo get_field('energy_content'); ?>
            </div>
        </div>
    </div>
</div>
<div class="simplicity-section">
    <div class="container">
        <div class="brd"></div>
        <?php if(get_field('simply_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('simply_title'); ?></h2>
		<?php } ?>
        <?php if(get_field('simply_content')) { ?>
			<?php echo get_field('simply_content'); ?>
		<?php } ?>
    </div>
</div>
<div class="faq-section">
    <div class="container">
        <div class="brd"></div>
        <?php if(get_field('faq_title')) { ?>
			<h2 class="sec-title"><?php echo get_field('faq_title'); ?></h2>
        <?php } ?>
        <?php if(get_field('faq_faq')) { ?>
            <div class="faq">
                <?php foreach(get_field('faq_faq') as $faq) { ?>
                    <div class="list">
                        <div class="question">
                            <?php echo $faq['question']; ?>
                        </div>
                        <div class="answer">
                            <?php echo $faq['answer']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        
    </div>
</div>