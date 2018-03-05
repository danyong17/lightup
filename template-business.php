<?php
/**
 * Template Name: Business
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'business-header'); ?>
  <?php get_template_part('templates/content', 'business'); ?>
<?php endwhile; ?>
