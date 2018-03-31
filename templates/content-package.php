<div class="pricelist-section">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2 class="sec-title"><?php echo get_field('title'); ?></h2>
        <?php } ?>
        <?php if(get_field('short_text')) { ?>
            <h6 class="text-center"><?php echo get_field('short_text'); ?></h6>
        <?php } ?>
        <?php if(get_field('packages')) { ?>
            <div class="outer-container">
                <div class="package-container">
                    <div class="swiper-wrapper">
                        <?php foreach(get_field('packages') as $pack) { ?>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="power">
                                            <div class="watt"><?php echo $pack['watts']; ?></div>
                                            <span>power</span>
                                            <div class="price"><?php echo $pack['price']; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="description"><?php echo $pack['description']; ?></div>
                                    </div>
                                </div>
                                <div class="lower">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="ests-label">
                                                Estimated Monthly Savings:
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="ests">
                                                <?php echo $pack['estimated_savings']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="calculation-section">
    <div class="container">
        
    <?php if(get_field('calc_title')) { ?>
        <h3><?php echo get_field('calc_title'); ?></h3>
    <?php } ?>
    <div class="desc">
    <?php if(get_field('description')) { ?>
        <?php echo get_field('description'); ?>
    <?php } ?>
    </div>
    <div class="calculate">
        <div class="overlay">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/solar.gif">
        </div>
        <?php echo do_shortcode('[contact-form-7 id="332" title="Package"]'); ?>
    </div>
    <input type="hidden" value="<?php echo get_the_id(); ?>" id="pageID">
    
    </div>
    <div class="container">
        <div id="package_result"></div>
    </div>
</div>
