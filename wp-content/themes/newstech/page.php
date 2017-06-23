<?php
/**
 * Template Name: about
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->

    <div>
        <?php
        the_title('<h1>','</h1>');
        if ( have_posts() ) : the_post();
            the_content();
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endif;
        ?>
    </div>