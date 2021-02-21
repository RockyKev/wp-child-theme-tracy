<?php

/**
 * Template Name: BBJ Full Width Template
 */
?>

<main id="site-content" class="bbj-landing" role="main">

    <?php get_header(); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : ?>

            <div class="entire-page">

                <?php if (get_theme_mod('add_theme_logo')) : ?>

                    <img src="<?php echo get_theme_mod('add_theme_logo'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">

                <?php else : ?>

                    <img src="https://bjjmentalmodels.files.wordpress.com/2019/01/horizontal_on_transparent_by_logaster-1.png?w=656&h=171" />

                <?php endif; ?>


                <!-- TEXT -->
                <div class="bbj-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container_class' => 'custom-menu-class'
                    ));
                    ?>

                </div>


        <?php
            the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
    endif; ?>

            </div>

            <?php get_template_part('template-parts/footer-menus-widgets'); ?>

            <?php get_footer(); ?>


</main>