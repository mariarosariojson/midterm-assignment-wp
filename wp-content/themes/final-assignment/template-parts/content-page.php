<?php
/*
Template Name: Page Template
*/
get_header();
?>

<article>
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
?>