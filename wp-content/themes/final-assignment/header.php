<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap');
    </style>
    <title> <?= get_bloginfo('name'); ?></title>

    <?php
    wp_head()
    ?>

</head>

<body>
    <header class="header">
        <div class="navigation">
            <a class="site-title" href="front-page.php"> <?= get_bloginfo('name'); ?></a>
            <?php
            get_bloginfo('name');
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary'
                )
            );
            ?>
        </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <header class="page-title">
            <h1 class="heading"><?= the_title() ?></h1>
        </header>