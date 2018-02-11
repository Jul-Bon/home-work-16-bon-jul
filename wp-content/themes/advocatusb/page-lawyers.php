<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 09.02.2018
 * Time: 10:51
 */

get_header(min); ?>

    <div id="primary" class="content-area">
        <section class="team" id="lawyers">
            <div class="container">
                <div class="position">
                    <div class="caption">
                        <h2><?php echo get_theme_mod('section_name_3'); ?></h2>
                        <p><?php echo get_theme_mod('section_description_3'); ?></p>
                    </div>
                </div>
                <div class="clearfix">
                    <?php
                    //The query
                    $page_number = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = [
                        'post_type' => 'team',
                        'show_all' => false,
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => __('<< Prev'),
                        'next_text' => __('Next >>'),
                        'add_args' => false,
                        'add_fragment' => '',
                        'screen_reader_text' => __('Posts navigation'),
                        'paged' => $paged,
                        'order' => 'ASC',
                        'posts_per_page' => 8
                    ];

                    query_posts($args);
                    while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/content-lawyers', 'lawyers'); ?>

                    <?php endwhile; ?>
                    <div class="pagin_lawyer clearfix"><?php the_posts_pagination('$args'); ?></div>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    </div><!-- #primary -->

<?php
get_footer();