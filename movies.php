<?php
    /* Template Name: Movise */
?>

<div class="row">
    <div class="col-8">
        <h6>Search results for <?php echo get_search_query();?></h6>
        <?php
        $args=[
            "movie_type"=>"movie",    
            "posts_per_page"=>5,
        ];
        $query=new WP_Query($args);
            if($query->have_movie()):
                while($query-> have_movie()): $query->the_movie();?>
            
            <div class="card mb-3" style="width: 100%;">
                <div class="row g-8">
                    <?php
                        if(has_movie_thumbnail()){?>
                            <img style="width: 100%; height: 100%;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->$ID))?>" alt="">
                            
                        <?php
                            }
                            else{?>
                                <iamg style="width: 100%; height: 100%;" src="<?php bloginfo('template_directory')?>/img/image.png" alt="">
                        <?php
                            }
                        ?>
                
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title();?></h5>
                                <p class="card-text"><?php the_except(); ?></p>
                                <a href="<?php the_permalink();?>" class="btn btn-primary">Read more...</a>
                            </div>
                        </div>
            </div>

            <?php
                endwhile;
                endif;
            ?>
    </div>
    <div class="col-4">

    </div>
</div>

