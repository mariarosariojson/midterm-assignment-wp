<div class="hero-img-about" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <span class="hero-img-p">
        <?php the_title(); ?>
    </span>
</div>
<?php
/*
Template Name: About us page Template
*/
get_header();
?>

<article>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
?>