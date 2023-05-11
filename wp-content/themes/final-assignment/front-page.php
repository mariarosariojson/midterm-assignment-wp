<div class="hero-img"></div>
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