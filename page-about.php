<?php get_header();

//Template Name: page about

?>



<main class="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>