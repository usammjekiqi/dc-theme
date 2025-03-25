<?php get_header();?>
    <div class="container">
        <div class="col-lg-8">
        <h1>Page Not Found!</h1>
        <?php
            get_search_form();
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404">
        </div>
        <div class="col-lg-4">
            <?php
                get_search_form()
            ?>
        </div>
        
            
       
    </div>
<?php get_footer();?>