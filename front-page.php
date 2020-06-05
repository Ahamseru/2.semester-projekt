<?php get_header(); ?>

<div class="box">
        <img src="http://ahma03242.apache.eadania.dk/wp-content/uploads/2020/06/d.jpg" alt="Cykelklub">
        <div class="text">
            <h1>Velkommen til Nr. Søby cykelklub!</h1>
        </div>
    </div>

<!-- <div class="hero-image-bg">
    <img src="http://ahma03242.apache.eadania.dk/wp-content/uploads/2020/06/d.jpg" id="cover-pic" alt="">
    <h1 class="hero-image-bg">Velkommen til Nr. Søby cykelklub!</h1>
</div> -->



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