<?php

function amaze_post_types() {

    // Chess Blog
    register_post_type('chess', array(
        'show_in_rest'  =>  true,
        'supports'      =>  array(
            'title', 'editor', 'thumbnail'
        ),
        'rewrite'       =>  array(
            'slug'          =>  'chess'
        ),
        'has_archive'   =>  true,
        'public'        =>  true,
        'labels'        =>  array(
            'name'          =>  'Chess Blog',
            'add_new_item'  =>  'Add New Chess Post',
            'edit_item'     =>  'Edit Chess Post',
            'all_items'     =>  'All Chess Posts',
            'singular_name' =>  'Chess Post',
        ),
        'menu_icon'     =>  'dashicons-lightbulb'
    ));
    
    // CFB Rankings
    register_post_type('cfbranking', array(
        'show_in_rest'  =>  true,
        'supports'      =>  array(
            'title', 'editor'
        ),
        'rewrite'       =>  array(
            'slug'          =>  'rankings'
        ),
        'has_archive'   =>  true,
        'public'        =>  true,
        'labels'        =>  array(
            'name'          =>  'CFB Rankings',
            'add_new_item'  =>  'Add New Ranking',
            'edit_item'     =>  'Edit Rankings',
            'all_items'     =>  'All Rankings',
            'singular_name' =>  'Ranking',
        ),
        'menu_icon'     =>  'dashicons-awards'
    ));

    // Devotions
    register_post_type('devotion', array(
        'show_in_rest'  =>  true,
        'supports'      =>  array(
            'title', 'editor', 'thumbnail'
        ),
        'rewrite'       =>  array(
            'slug'          =>  'devotions'
        ),
        'has_archive'   =>  true,
        'public'        =>  true,
        'labels'        =>  array(
            'name'          =>  'Devotions',
            'add_new_item'  =>  'Add New Devotion',
            'edit_item'     =>  'Edit Devotion',
            'all_items'     =>  'All Devotions',
            'singular_name' =>  'Devotion',
        ),
        'menu_icon'     =>  'dashicons-book-alt'
    ));

    // Sermon Illustrations
    register_post_type('illustration', array(
        'show_in_rest'  =>  true,
        'supports'      =>  array(
            'title', 'editor', 'thumbnail'
        ),
        'rewrite'       =>  array(
            'slug'          =>  'illustrations'
        ),
        'has_archive'   =>  true,
        'public'        =>  true,
        'labels'        =>  array(
            'name'          =>  'Sermon Illustrations',
            'add_new_item'  =>  'Add New Illustration',
            'edit_item'     =>  'Edit Illustration',
            'all_items'     =>  'All Illustrations',
            'singular_name' =>  'Illustration',
        ),
        'menu_icon'     =>  'dashicons-pressthis'
    ));

    
}

add_action('init', 'amaze_post_types');

?>