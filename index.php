<?php get_header(); ?>


<h1>Hello World!</h1>
<?php
    if(have_posts()):
        while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <h2><?php the_time(); ?></h2>
        <small><?php the_time('Y/m/d')?></small>
        <p><?php the_content(); ?></p>
        <?php endwhile;?>
    <?php endif;?>


<?php get_footer(); ?>
