<?php
/*
Template Name: Page Tempe
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
<div class="content">
<?php the_content(); ?>
</div>
</div> <!-- /container -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>