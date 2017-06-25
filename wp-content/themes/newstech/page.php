<?php
/**
 * Template Name: page
 * The template for displaying template-parts
 *
 * This is the template that displays all template-parts by default.
 * Please note that this is the WordPress construct of template-parts and that
 * other "template-parts" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <main class="container">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );


            // End the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->

<?php get_footer(); ?>
