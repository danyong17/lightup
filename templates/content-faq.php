<div class="faq-section">
    <div class="container">
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