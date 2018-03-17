<div class="contact-section">
    <div class="container">
        <h2 class="sec-title">
        <?php echo get_field('title'); ?>
        </h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="details">
                    <?php echo get_post_field('post_content', get_the_id()); ?>
                </div>
                <?php if(get_field('address')) { ?>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <?php echo get_field('address'); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if(get_field('map')) { ?>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <?php echo get_field('phone'); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if(get_field('map')) { ?>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <a href="mail:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a>
                        </div>
                    </div>
                <?php } ?>
                <div class="social-media">
                    Visit us on :
                    <?php wp_nav_menu( array('menu' => 'Social Media') ); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="field">
                    <?php if(get_field('map')) { ?>
                        <?php echo get_field('map'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>