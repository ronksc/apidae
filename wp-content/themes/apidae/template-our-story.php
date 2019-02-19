<?php
/**
 * Template Name: Our Story
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'our-story'); ?>
<?php endwhile; ?>
