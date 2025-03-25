<?php

function add_theme_script(){
    wp_enqueue_style( "style", get_template_directory_uri()."/style.css", false, '1.0', "all");    
    wp_enqueue_script("main", get_template_directory_uri()."/js/main.js", array('jquery'), "1.0", true);
    wp_enqueue_script("bootstrap.bundle.min", get_template_directory_uri()."/js/bootstrap.bundle.min.js", array('jquery'), "1.0", true);
    wp_enqueue_style( "main", get_template_directory_uri()."/css/main.css", false, '1.0', "all");
    wp_enqueue_style( "maibootstrap.min", get_template_directory_uri()."/css/bootstrap.min.css", false, '1.0', "all");

    if (is_singular() && comments_open() && get_option('thread-comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action("wp_enqueue_scripts","add_theme_script");
function ds_set_up(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Navigation');

}

add_action("init","ds_set_up");

add_theme_support("post-thumbnails");


function themenam_widgets_init(){
    redister_sidebar(array(
        'name' => __('primary sidebar','thene_name'),
        'id' => 'sidebar_1',
        'after_wiget'=> '</aside id="%1$s" class="widget %2$s">',
        'after_wiget'=> '</aside>',
        'before_title'=> '<h3 class="widget_title">',
        'after_title'=> '</h3>'


    ));
    register_sidebar(array(
        'name' => __('secondary  sidebar','thene_name'),
        'id' => 'sidebar_2',
        'after_wiget'=> '<ul><li> id="%1$s" class="widget %2$s">',
        'after_wiget'=> '</li></ul>',
        'before_title'=> '<h3 class="widget_title">',
        'after_title'=> '</h3>'

    ));
}


function create_post_type(){
    $labels=array(
        'name'=>__('Movies'),
        'singular_name'=>__('movie'),
        'add_new'=>__('Add Movie','movie'),
        'add_new-item'=>__('Add New Movie'),
        'edit_item'=>__('Edit Movie'),
        'new_items'=>__('New Movie'),
        'all_item'=>__('All Movie'),
        'view_item'=>__('View Movies'),
        'search_item'=>__('Search Movie'),
        'not_found'=>__('No movies found'),
        'not_found_in_trash'=>__('No movies found in trash'),
        'menu_name'=>"Movie"
        
    );
    $args=array(
        'labels'=>$labels,
        'description'=>"Movi and single movie details",
        'public'=> true,
        'menu_position'=>5,
        'supports' =>array('title','editor','thumbnail','excerpt','commenst'),
        'menu_icon'=>'dashicons-button',
        'has_archive'=> true

    );
    register_post_type("movie",$args);
}

add_action('init','create_post_type');
?>
