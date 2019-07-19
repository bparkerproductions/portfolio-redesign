<?php

/* CUSTOM post types */
function create_projects_post_type() {
    register_post_type( 'projects',
        [
        'labels' => [
            'name' => __( 'Projects' ),
            'singular_name' => __( 'Project' )
        ],
        'public' => true,
        'has_archive' => true,
        ]
    );
}
add_action( 'init', 'create_projects_post_type' );

function create_testimonials_post_type() {
    register_post_type( 'testimonials',
        [
        'labels' => [
            'name' => __( 'Testimonials' ),
            'singular_name' => __( 'Testimonial' )
        ],
        'public' => true,
        'has_archive' => true,
        ]
    );
}
add_action( 'init', 'create_testimonials_post_type' );

function create_demo_post_type() {
    register_post_type( 'demos',
        [
        'labels' => [
            'name' => __( 'Code Demos' ),
            'singular_name' => __( 'Code Demo' )
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
            'supports' => ['editor']
        ]
    );
}
add_action( 'init', 'create_demo_post_type' );