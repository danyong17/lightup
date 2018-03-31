<?php get_template_part('templates/page', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">
      <div class="container">
        <h2 class="sec-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </article>
<?php endwhile; ?>
