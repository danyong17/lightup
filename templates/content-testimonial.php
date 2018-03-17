<div class="testimonial-section">
    <div class="container">
        <h2 class="sec-title">Testimonials</h2>
        <?php $testmonials = get_field('testimonials'); ?>
        <?php if($testmonials) { ?>
            <?php $count = 1; ?>
            <?php foreach($testmonials as $testmonial): ?>
                <div class="testimonial-container">
                    <div class="row">
                        <?php if($count == 1) { ?>
                            <div class="col-sm-7">
                                <div class="inner">
                                    <h4><?php echo $testmonial['name']; ?></h4>
                                    <div class="testimony">
                                        <?php echo $testmonial['testimonial']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="slide-container">
                                    <?php $images = $testmonial['images']; ?>
                                    <?php if($images) { ?>
                                    <div class="swiper-wrapper">
                                        <?php foreach($images as $image) { ?>
                                        <div class="swiper-slide" style="background-image:url(<?php echo $image['url']; ?>)"> </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-sm-5">
                                <div class="slide-container">
                                    <?php $images = $testmonial['images']; ?>
                                    <?php if($images) { ?>
                                    <div class="swiper-wrapper">
                                        <?php foreach($images as $image) { ?>
                                        <div class="swiper-slide" style="background-image:url(<?php echo $image['url']; ?>)"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <h4><?php echo $testmonial['name']; ?></h4>
                                <div class="testimony">
                                    <?php echo $testmonial['testimonial']; ?>
                                </div>
                            </div>
                            <?php $count = 1; ?>
                        <?php } ?>
                    </div>
                </div>
            <?php $count++; endforeach; ?>
        <?php } ?>
    </div>
</div>