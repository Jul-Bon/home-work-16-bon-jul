<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 09.02.2018
 * Time: 13:31
 */
get_header(min); ?>

<section class="practis_area" id="practis_area">
    <div class="container">
        <div class="position">
            <div class="caption">
                <h2><?php echo get_theme_mod('section_name_2'); ?></h2>
                <p><?php echo get_theme_mod('section_description_2'); ?></p>
            </div>
        </div>
        <div class="services">
            <div class="service_part clearfix">
                <?php
                //The query
                $args = array(
                    'post_type' => 'practice_area',
                    'order' => 'ASC',
                );
                $practice = new WP_Query($args); ?>

                <?php if ($practice->have_posts()): ?>

                    <!-- The loop -->
                    <?php while ($practice->have_posts()) : $practice->the_post(); ?>
                        <?php get_template_part('template-parts/content-practice-area', 'practice-area'); ?>
                    <?php endwhile; ?>
                    <!-- End of the loop -->

                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();