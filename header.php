<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

    <header class="site-header">

        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description') ?></p>

        <nav class="site-nav">

            <?php
            $args = [
                    'theme_location' => 'header'
            ];

            ?>

           <?php wp_nav_menu( $args) ?>

        </nav>
    </header>


