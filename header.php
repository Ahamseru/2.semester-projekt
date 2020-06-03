<!DOCTYPE html>
<html>

<head>
    <?php wp_head();?>
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
</head>


<body <?php body_class();?>>


    <header class="sticky-top">



        <nav class="navbar navbar-dark navbar-expand-md" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->


                <?php
    if( get_custom_logo() ) {
        the_custom_logo();
    } elseif ( is_front_page() && is_home() ) {
        ?>
                <h2 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </h2>
                <?php
        $description = get_bloginfo( 'description', 'display' );
    } else {
        ?>
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </p>
                <?php
        $description = get_bloginfo( 'description', 'display' );
    }

    if ( ( isset($description) && $description) || is_customize_preview() ) {
        ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
    }
?>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
                <a href="https://www.facebook.com/nr.soebycykelklub">
                    <img id="fb-icon"
                        src="http://ahma03242.apache.eadania.dk/wp-content/uploads/2020/06/iconfinder_facebook_circle_black_107153.png"
                        alt="">

                </a>

            </div>



        </nav>
    </header>