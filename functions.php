<?php
 // Add this to all your php files for added security

 if (!defined('ABSPATH'))
     exit; 
     // Exit if accessed directly. 
     // Ex: Not being called up directly by index.php or some other theme PHP file
 
 // FOR COLLEGE NETWORK SECURITY
 // FORCE AUTO-UPDATE EVERYTHING (WP CORE, PLUGINS AND THEMES)
 add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // ENABLE MINOR UPDATES
 add_filter( 'allow_major_auto_core_updates', '__return_true' );         // ENABLE MAJOR UPDATES
 add_filter( 'auto_update_plugin', '__return_true' );                    // UPDATE PLUGINS
 add_filter( 'auto_update_theme', '__return_true' );                     // UPDATE THEMES 

 /*
 * Proper way to enqueue scripts and styles.
 */
 function mariapobre_theme_scripts() {
     wp_enqueue_style( 'mariapobre', get_stylesheet_uri() );
 }
 add_action( 'wp_enqueue_scripts', 'mariapobre_theme_scripts' );

 // END STEP 2.9

     /*  STEP 2.10 ADD THE MENUS */

     function add_my_menus() {
        register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'mariapobre' ),
            'footer-menu' => __( 'Footer Menu', 'mariapobre' ),
            'social-menu' => __( 'Social Menu', 'mariapobre'),
            // YOU CAN ADD AS MANY MENUS AS YOU WANT HERE
        )
        );
    }
    add_action( 'init', 'add_my_menus' );

    // END STEP 2.10 ADD THE MENUS