<?php 

    //Template Name: about page  


?>

<div class="contatiner">
    <div class="first">
    <h1>about page posts</h1>

        <?php
        if(have_posts()):
            while(have_posts()): the_post();?>
            <h2><?php the_title(); ?></h2>
            <h2><?php the_time(); ?></h2>
            <small><?php the_time('Y/m/d')?>  in <?php the_category()?>   </small>
           
            <p><?php the_content(); ?></p>
            <?php endwhile;?>
            <?php endif;?>
    </div>
        <div class="second">
            <h1>sidebar</h1>
        </div>
</div>
<?php get_header(); ?>


<?php get_footer(); ?>