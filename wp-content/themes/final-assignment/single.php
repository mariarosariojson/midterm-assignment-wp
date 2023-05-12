<?php
get_header();
?>


<div class="container">
    <div class="content">
        <div class="post-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="single-post-img">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div class="meta-data">
            <p><?php the_time(get_option('date_format')); ?></p>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <div class="page-link">
            <a href="http://localhost:8888/">Back to home</a>
        </div>
        <br>
    </div>
</div>




<?php
get_footer();
?>