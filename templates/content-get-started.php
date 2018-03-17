<div class="get-started-section">
    <div class="detail-area">
        <div class="container">
            <?php echo get_post_field('post_content', get_the_id()); ?>
        </div>
    </div>
    <?php if(get_field('package')) { ?>
        <div class="container">
            <div class="packages">
                See our packages <a href="<?php echo get_field('package'); ?>" target="_blank">here</a>.
            </div>
        </div>
    <?php } ?>
    <div class="form-area">
        <div class="container">
            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
        </div>
    </div>
</div>