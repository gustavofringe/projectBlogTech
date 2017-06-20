<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css"/>
    <link rel="icon" href="favicon.ico" />
    <title>Le blog</title>
    <?php wp_head(); ?>
</head>

<body>
<header>
    <!--
    title of site
    -->
    <div class="container">
        <h1><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.jpg" alt="titre principal"></h1>
        <!--
        slide
        -->
        <div class="background">
            <img class="img-blog slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide1.jpg" alt="Jeu concours">
            <img class="img-blog slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide2.jpg" alt="téléphone">
            <img class="img-blog slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide3.jpg" alt="Jeu vidéo">
        </div>
        <p id="text"></p>
        <!--

        navigation
        -->
        <div class="menu mt-4">
            <ul class="tabs nav">
                <li class="nav-item">
                    <a class="nav-link tab" id="tab_1" onclick="show('1'); tabs('1')" href="#test">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab" id="tab_2" onclick="show('2'); tabs('2')" href="#idea">Idée de la
                        semaine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab" id="tab_3" onclick="show('3'); tabs('3')" href="#about">A propos</a>
                </li>
            </ul>
            <!--
            content tabs
            -->
            <div class="tabs-content">
                <p class="content" id="content_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                    ab
                    consequuntur deleniti dolor dolore eos ex harum inventore ipsa nemo nesciunt praesentium quam
                    quia quod ratione rem repellat, sed velit?</p>
                <p class="content" id="content_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea
                    eligendi expedita incidunt optio quidem sequi voluptatum! Aspernatur dignissimos eos ex harum
                    iste, mollitia nemo nesciunt repudiandae rerum saepe totam vel.</p>
                <p class="content" id="content_3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    commodi corporis, distinctio dolore doloribus dolorum enim et id in obcaecati quibusdam, vel
                    voluptas voluptatibus! Aliquid assumenda blanditiis excepturi provident quidem?</p>

            </div>
        </div>
    </div>
</header>

<main id="blog" class="container d-flex">