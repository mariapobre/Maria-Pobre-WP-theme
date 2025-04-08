<?php  // START STEP 2.4
    // Add this to all your php files for added security
    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>
    
    <!-- START STEP 2.4 ADD HEADER.PHP CODE -->
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php // the viewport metatag is what makes a design responsive ?>
        
    <!-- START 2.12 WP_HEAD GET DYNAMIC HEADER CONTENT -->

    <?php wp_head(); ?>

    <!-- END 2.12 WP_HEAD GET DYNAMIC HEADER CONTENT -->-

        <title></title>
    </head>

    <body>

    <header>
        <nav>
                <!-- START STEP 2.11 ADD THE MENU TO THE PAGE -->
    <?php 
        wp_nav_menu(array(
            'menu_class'	  	=> 'primary-menu',  // adds: class="primary-menu"
            'theme_location' 	=> 'header-menu',   // is controlled as the "header menu" in the backend
            'menu_id'	    	=> 'menu',          // adds: id="menu"
            'container'         => 'div',           // menu is inside a div
        ));
    ?>
    <!-- END STEP 2.11 ADD THE MENU TO THE PAGE -->
        </nav>
    </header>
    
        <!-- START STEP 2.13 ADD SEARCH FORM -->

        <?php get_search_form(); ?>

<!-- END STEP 2.13 ADD SEARCH FORM -->       

    <!-- END STEP 2.4 ADD HEADER.PHP CODE -->
    <?php  // END OF STEP 2.4 ?>

    