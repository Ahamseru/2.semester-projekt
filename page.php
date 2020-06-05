<?php get_header(); ?>


<!-- Dette er indholdet der indeholder wordpress egen side titel, og side indhold -->
<div class="container entry-content">

    <?php

    if(have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile;
    endif;

?>
</div>

<?php get_footer(); ?>