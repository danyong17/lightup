<?php if(!is_front_page()) { ?>
  <div class="free-quote-section">
  <div class="container">
    <h2 class="sec-title"><?php echo get_field('gfq_title','option'); ?></h2>
    <div class="desc"><?php echo get_field('gfq_text','option'); ?></div>
    <?php echo do_shortcode(get_field('gfq_form_shortcode','option')); ?>
  </div>
</div>
<?php } ?>
<footer class="content-info">
  <div class="container">
    Copyright <?php echo get_bloginfo( 'name' ); ?> 2018.
  </div>
</footer>