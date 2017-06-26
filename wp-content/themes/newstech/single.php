<?php include "header.php"; ?>


    <main class="container">
        <?php
        if ( have_posts() ) : the_post();
            the_content();
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endif;
        ?>
    </main>

<?php include "footer.php" ?>
