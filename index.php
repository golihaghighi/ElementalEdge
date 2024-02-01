<?php

/**
 * The main template file for the ElementalEdge theme.
 * This file is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <!-- Start the Loop -->
            <?php while (have_posts()) : the_post(); ?>

                <!-- Include the Post Format-specific template for the content -->
                <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php endwhile; ?>

            <!-- Add Pagination -->
            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <!-- Include the template for a "No posts found" message -->
            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>