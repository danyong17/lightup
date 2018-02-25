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