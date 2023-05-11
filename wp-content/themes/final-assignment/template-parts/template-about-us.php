<div class="hero-img-about"><img src="(http://localhost:8888/wp-content/uploads/2023/05/daniel-storek-JM-qKEd1GMI-unsplash-scaled.jpg" alt="">
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