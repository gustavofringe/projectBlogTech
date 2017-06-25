<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">accueil</a>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <div class="entry-content">
        <?php the_content(); ?>

    </div><!-- .entry-content -->

</article><!-- #post-## -->
