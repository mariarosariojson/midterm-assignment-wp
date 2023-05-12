<div class="hero-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
<?php
get_header()
?>

<article class="content">
    <div class='container'>
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        }
        ?>
        <div class="content-front-page">
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php
get_footer()
?>