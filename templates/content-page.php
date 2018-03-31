<div class="page-content-section">
    <div class="container">
    <?php if(is_page('thank-you')) { ?>
        <div class="brd-t"></div>
        <?php the_content(); ?>
        <div class="brd-b"></div>
    <?php } else { ?>
        <?php the_content(); ?>
    <?php } ?>
    </div>
</div>
