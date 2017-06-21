<?php


include "header.php"; ?>

<div id="primary" class="content-area">
    <main id="main" class="container" role="main">

        <?php
        //
        while ( have_posts() ) : the_post();

            the_content();
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php include "footer.php" ?>
