<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AdvocatusB
 */

get_header('min'); ?>

    <div class="container single_lawyer">
        <?php while (have_posts()) : the_post(); ?>

            <div class="lawyer_img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <div class="about_lawyer"><?php the_content(); ?></div>

            <div class="single_nav"><?php the_post_navigation(); ?></div>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
