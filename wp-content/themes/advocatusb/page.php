<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AdvocatusB
 */

get_header(); ?>
    <div id="primary" class="content-area">
    <main id="main" class="site-main">

<?php if (is_front_page()) : ?>
    <section class="about" id="about_us"
             style="background: <?php echo get_theme_mod(background_color); ?>
                     url('<?php echo get_theme_mod(section_background); ?>') no-repeat center/cover">
        <div class="container">
            <div class="position">
                <span class="number"><?php echo get_theme_mod('section_number'); ?></span>
                <div class="caption">
                    <h2><?php echo get_theme_mod('section_name'); ?></h2>
                    <p><?php echo get_theme_mod('section_description'); ?></p>
                </div>
            </div>
            <div class="box">
                <h3><?php echo get_theme_mod('first_subtitle'); ?></h3>
                <!-- The custom post-type of our history-->
                <dl>
                    <?php
                    //The query
                    $args = array(
                        'post_type' => 'history',
                        'order' => 'DESC',
                    );
                    $years = new WP_Query($args); ?>

                    <?php if ($years->have_posts()): ?>

                        <!-- The loop -->
                        <?php while ($years->have_posts()) : $years->the_post(); ?>
                            <?php get_template_part('template-parts/content-history', 'history'); ?>
                        <?php endwhile; ?>
                        <!-- End of the loop -->

                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </dl>
            </div>
            <div class="box second">
                <h3><?php echo get_theme_mod('second_subtitle'); ?></h3>
                <p><?php echo get_theme_mod('right_part_description'); ?></p>
            </div>
        </div>
    </section>

    <section class="practis_area" id="practis_area">
        <div class="container">
            <div class="position">
                <span class="number"><?php echo get_theme_mod('section_number_2'); ?></span>
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

    <section class="team" id="lawyers">
        <div class="container">
            <div class="position">
                <span class="number"><?php echo get_theme_mod('section_number_3'); ?></span>
                <div class="caption">
                    <h2><?php echo get_theme_mod('section_name_3'); ?></h2>
                    <p><?php echo get_theme_mod('section_description_3'); ?></p>
                </div>
            </div>
            <div class="clearfix">
                <?php
                //The query
                $args = array(
                    'post_type' => 'team',
                    'order' => 'ASC',
                    'posts_per_page' => 4
                );
                $members = new WP_Query($args); ?>

                <?php if ($members->have_posts()): ?>

                    <!-- The loop -->
                    <?php while ($members->have_posts()) : $members->the_post(); ?>
                        <?php get_template_part('template-parts/content-lawyers', 'lawyers'); ?>
                    <?php endwhile; ?>
                    <!-- End of the loop -->

                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </section>

    <section class="clients">
        <div class="container">
            <div class="position">
                <span class="number"><?php echo get_theme_mod('section_number_4'); ?></span>
                <div class="caption">
                    <h2><?php echo get_theme_mod('section_name_4'); ?></h2>
                    <p><?php echo get_theme_mod('section_description_4'); ?></p>
                </div>
            </div>

            <div class="flexslider client_slider">
                <ul class="slides">
                    <?php
                    //The query
                    $args = array(
                        'post_type' => 'reviews',
                        'order' => 'ASC',
                    );
                    $clients = new WP_Query($args); ?>

                    <?php if ($clients->have_posts()): ?>

                        <!-- The loop -->
                        <?php while ($clients->have_posts()) : $clients->the_post(); ?>
                            <li class="customer_reviews">
                                <div class="yellow_square">
                                    <div class="clients_photo"><?php the_post_thumbnail(); ?></div>
                                </div>
                                <div class="review clearfix">
                                    <blockquote class="clients_say">
                                        <p><?php the_field('client_say'); ?></p>
                                        <footer>
                                            <h5><?php the_title(); ?></h5>
                                            <span><?php the_field('сlient_post'); ?></span>
                                        </footer>
                                    </blockquote>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        <!-- End of the loop -->

                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="asked_questions" id="faq">
        <div class="container">
            <div class="position">
                <span class="number"><?php echo get_theme_mod('section_number_6'); ?></span>
                <div class="caption">
                    <h2><?php echo get_theme_mod('section_name_6'); ?></h2>
                    <p><?php echo get_theme_mod('section_description_6'); ?></p>
                </div>
            </div>
            <div class="questions_part clearfix">
                <ul class="list_questions">
                    <li>
                        <?php
                        //The query
                        $args = array(
                            'post_type' => 'asked_questions',
                            'order' => 'ASC',
                        );
                        $questions = new WP_Query($args); ?>

                        <?php if ($questions->have_posts()): ?>

                            <!-- The loop -->
                            <?php while ($questions->have_posts()) : $questions->the_post(); ?>
                                <?php get_template_part('template-parts/content-questions', 'questions'); ?>
                            <?php endwhile; ?>
                            <!-- End of the loop -->

                            <?php wp_reset_query(); ?>
                        <?php endif; ?>
                    </li>
                </ul>
                <div class="answer-container">
                    <p class="answer">
                        Long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout. The point of using
                        Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                        o using Content here, content here, making it look like readable English.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
    </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
