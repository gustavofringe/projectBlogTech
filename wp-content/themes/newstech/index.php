<?php include 'header.php'; ?>
    <!--
           slide
           -->
    <div class="background">
        <img class="img-blog slide" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/slide1.jpg"
             alt="Jeu concours">
        <img class="img-blog slide" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/slide2.jpg"
             alt="téléphone">
        <img class="img-blog slide" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/slide3.jpg"
             alt="Jeu vidéo">
    </div>
    <main id="blog" class="container d-flex">
        <?php
        include 'sidebar.php';
        ?>

        <div class="d-block">
                    <?php
                    while (have_posts()):the_post();
// Si l'article n'a pas d'Image à la Une, on récupère la 1ère image attachée
                            $attachments = get_children(
                                array(
                                    'post_parent' => get_the_ID(),
                                    'post_type' => 'attachment',
                                    'post_mime_type' => 'image',
                                    'orderby' => 'menu_order',
                                    'order' => 'DESC',
                                    'numberposts' => 1
                                )
                            );
                            if ($attachments) {
                                foreach ($attachments as $attachment) :
                                    ?>

                                    <div class="new m-4">
                                        <div class="row pb-4">
                                    <div class="col-md-12 col-lg-6">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title_attribute(); ?>"><?php echo wp_get_attachment_image($attachment->ID, 'thumbnail'); ?></a>
                                    </div>
                    <div class="col-md-12 col-lg-6">
                        <h3><?php echo get_the_title(get_option('page_for_posts', true)); ?></h3>
                        <div class="post-user">
                            <i class="icon-user d-inline"></i>
                            <span class="user d-inline"><?php the_author(); ?></span>
                            <span class="post_date d-inline"><?php the_time('D j M Y H:i');?></span>
                            <i class="icon-comment-alt d-inline"></i>
                            <span class="d-inline"><a href="template-parts/show.html"><?php comments_number(); ?></a></span>
                        </div>

                        <p class="mt-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                            aperiam, beatae cum earum enim
                            et eum facere iusto maxime nesciunt nobis provident quia quos ratione sed similique suscipit
                            tempora....
                        </p>
                        <div class="btn btn-secondary btn-lg btn-block"><a href="<?php the_permalink(); ?>">Lire la
                                suite >></a></div>
                    </div>
                </div>

            </div>

                <div class="pub mt-4 hidden-md-down">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/pub.jpg" alt="publicité">
                </div>
                                    <?php
                                endforeach;

                        }
                    endwhile;
                    ?>
                    <!--<div class="col-md-12 col-lg-6">
                        <img src="<?php /*echo esc_url(get_template_directory_uri()); */?>/img/img_blog1.jpg"
                             alt="enceinte bluetooth">
                    </div>-->

            <div class="new m-4">
                <div class="row pb-4">
                    <div class="col-md-12 col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_blog2.png"
                             alt="enceinte bluetooth">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <h3>Energy</h3>
                        <h4>Music Box 5 – La boite à son bluetooth au bon rapport qualité/prix</h4>
                        <div class="post-user">
                            <i class="icon-user d-inline"></i>
                            <span class="user d-inline">Fabien Pinel</span>
                            <span class="post_date d-inline">le 15 mai 2017</span>
                            <i class="icon-comment-alt d-inline"></i>
                            <span class="d-inline"><a href="template-parts/show.html">1 Comment</a></span>
                        </div>

                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                            aperiam, beatae cum earum enim
                            et eum facere iusto maxime nesciunt nobis provident quia quos ratione sed similique suscipit
                            tempora....
                        </p>
                        <div class="btn btn-secondary btn-lg btn-block"><a href="template-parts/show.html">Lire la
                                suite >></a></div>
                    </div>
                </div>
            </div>
            <div class="new m-4">
                <div class="row pb-4">
                    <div class="col-md-12 col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_blog3.jpg"
                             alt="enceinte bluetooth">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <h3>Energy</h3>
                        <h4>Music Box 5 – La boite à son bluetooth au bon rapport qualité/prix</h4>
                        <div class="post-user">
                            <i class="icon-user d-inline"></i>
                            <span class="user d-inline">Fabien Pinel</span>
                            <span class="post_date d-inline">le 15 mai 2017</span>
                            <i class="icon-comment-alt d-inline"></i>
                            <span class="d-inline"><a href="template-parts/show.html">1 Comment</a></span>
                        </div>

                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                            aperiam, beatae cum earum enim
                            et eum facere iusto maxime nesciunt nobis provident quia quos ratione sed similique suscipit
                            tempora....
                        </p>
                        <div class="btn btn-secondary btn-lg btn-block"><a href="template-parts/show.html">Lire la
                                suite >></a></div>
                    </div>
                </div>
            </div>
            <div class="new m-4">
                <div class="row pb-4">
                    <div class="col-md-12 col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_blog4.jpg"
                             alt="enceinte bluetooth">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <h3>Energy</h3>
                        <h4>Music Box 5 – La boite à son bluetooth au bon rapport qualité/prix</h4>
                        <div class="post-user">
                            <i class="icon-user d-inline"></i>
                            <span class="user d-inline">Fabien Pinel</span>
                            <span class="post_date d-inline">le 15 mai 2017</span>
                            <i class="icon-comment-alt d-inline"></i>
                            <span class="d-inline"><a href="template-parts/show.html">1 Comment</a></span>
                        </div>

                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                            aperiam, beatae cum earum enim
                            et eum facere iusto maxime nesciunt nobis provident quia quos ratione sed similique suscipit
                            tempora....
                        </p>
                        <div class="btn btn-secondary btn-lg btn-block"><a href="template-parts/show.html">Lire la
                                suite >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php get_footer(); ?>