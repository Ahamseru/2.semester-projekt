<?php
/*
Template Name: Kontaktside
*/

?>

<?php get_header(); ?>

<div class="container entry-content">
    <h1><?php the_title(); ?></h1>
    <div class="row">
        <div class="col-md-6">

            <?php

            if(have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            endif;

                ?>
        </div>
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d140835.0627595063!2d8.829873640552176!3d56.52721276735821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464bd83b9ef7047d%3A0xa00afcc1d514810!2s7800%20Skive!5e0!3m2!1sda!2sdk!4v1590496644430!5m2!1sda!2sdk"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>

        </div>
    </div>
</div>

<?php get_footer(); ?>