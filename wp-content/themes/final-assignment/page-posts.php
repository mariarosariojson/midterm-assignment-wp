<?php
/* Template Name: post-template */
get_header()
?>

<article>
    <div class="container">
        <div class="content">
            <div class="content-post">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</article>

<?php
get_footer()
?>