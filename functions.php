<?php 

    /*=========================
    * Basic Default
    =========================*/
    function dist_basic(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'post-formats', ['link', 'gallery', 'quote', 'aside'] );
    }
    add_action('after_setup_theme', 'dist_basic');


    /*===========================
    * Add menu on site
    ===========================*/
    function dist_menu(){
        register_nav_menus(array(
            'main_menu'          => 'Main Menu',
            'social_menu'        => 'Social Menu',
        ));
    }
    add_action('init', 'dist_menu');

    /*=====================
    * Custom Post Types
    =====================*/
    function dist_post_types(){
        register_post_type('article', array(
            'public'            => true,
            'labels'            => [
                'name'              => 'Articles',
                'singular_name'     => 'Article',
                'add_new'           => 'Write Article',
                'add_new_item'      => 'Write a Article',
                'edit_item'         => 'Edit Article',
                'new_item'          => 'New Article',
                'view_item'         => 'View Article',
                'view_items'        => 'View All Articles',
                'search_items'      => 'Search Articles',
                'not_found'         => 'Article Not Found',
                'all_items'         => 'All Articles',
                'set_featured_image'=> 'Set Article Poster',
                'featured_image'    => 'Article Poster',
                'remove_featured_image' => 'Remove Article Poster',
                'title'             => 'Article Title',
                'item_link'         => 'Article Link',
            ],
            'menu_icon'         => 'dashicons-book',
            'show_in_rest'      => false,
            'supports'          => [ 'title', 'editor', 'thumbnail' ],
            'has_archive'       => true,
        ));
    }
    add_action( 'init','dist_post_types' );

    /*===========================
    * Register Taxonomy For Articles Post Types
    ==========================*/

    function article_post_type_taxonomy(){
        
        $labels = array(
            'name'                       => 'Topics',
            'singular_name'              => 'Topic',
            'edit_item'                  => __( 'Edit Topic', 'textdomain' ),
            'update_item'                => __( 'Update Topic', 'textdomain' ),
            'add_new_item'               => __( 'Add New Topic', 'textdomain' ),
            'new_item_name'              => __( 'New Topic Name', 'textdomain' ),
            'separate_items_with_commas' => __( 'Separate Topics with commas', 'textdomain' ),
            'add_or_remove_items'        => __( 'Add or remove Topics', 'textdomain' ),
            'choose_from_most_used'      => __( 'Choose from the most used Topics', 'textdomain' ),
            'not_found'                  => __( 'No Topics found.', 'textdomain' ),
            'menu_name'                  => __( 'Topics', 'textdomain' ),
        );

        $article_args = array( 
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
        );

        register_taxonomy( 'articles_category', 'article', $article_args );
    }
    add_action( 'init', 'article_post_type_taxonomy' );

    /*===========================
    * Enqueue Scripts add here 
    ===========================*/
    function dist_enqueue(){
        //Style
        wp_enqueue_style( 'Animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style( 'Main', get_stylesheet_uri() );

        //Script
        wp_enqueue_script( 'wowJS', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', '', '', true );
        wp_enqueue_script( 'custom', get_theme_file_uri('/script.js'), '','', true );
    }
    add_action( 'wp_enqueue_scripts', 'dist_enqueue' );

    /*========================
    * Admin Bar Disable
    =======================*/
    function hide_admin_bar(){ 
        return false; 
    }
    add_filter( 'show_admin_bar', 'hide_admin_bar' );