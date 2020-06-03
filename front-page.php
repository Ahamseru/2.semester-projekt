<?php get_header(); ?>

<?php
$herobillede = get_the_post_thumbnail_url();
$herooverskrift = get_field('hero_overskrift');



if (has_post_thumbnail()){
    echo '<div class="hero-image">

    <div class="hero-image-bg"
        style="background-image: url(\''. $herobillede . '\'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <h2>' .$herooverskrift. '</h2>
            <p>Nyd en kop kaffe i vores hyggelige café</p>

        </div>

    </div>

</div>';

}

?>

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