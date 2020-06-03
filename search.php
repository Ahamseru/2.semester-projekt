<?php /* Template name: Custom Search */   
    get_header(); 
?>

<?php 
    if($_GET['search_text'] && !empty($_GET['search_text']))
    {
        $text = $_GET['search_text'];
    }

    if($_GET['type'] && !empty($_GET['type']))
    {
        $type = $_GET['type'];
    }

?>

<div class="container">
    <h4>Søger efter: <?php echo $text; ?></h4>

    <?php
        $args = array(
            'post_type' => $type,
            'posts_per_page' => -1,
            's' => $text,
            /*'exact' => true,*/
            'sentence' => true,
        );
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
    ?>
        <div class="post clearfix">
            <h5><?php the_title(); ?></h5>
            <strong>
                <?php if(get_post_type() == 'post'){ echo 'Post'; } ?>
                <?php if(get_post_type() == 'by'){ echo 'By'; } ?>
                <?php if(get_post_type() == 'butikker'){ echo 'Butik'; } ?>
                <?php if(get_post_type() == 'page'){ echo 'Page'; } ?>
            </strong>
        </div>    
    <?php endwhile; wp_reset_query(); ?>
</div>


<?php get_footer(); ?>