<?php
/*
Template Name: Product Page Template
*/
get_header();
?>

<article>
    <div class="content">
        <div class="product-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="product-content">
            <?php
            the_content();
            ?>
        </div>
    </div>
</article>

<?php
get_footer();
?>