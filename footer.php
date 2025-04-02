<?php 
    // START STEP 2.5 BUILD FOOTER
    // Add this to all your php files for added security

        if (!defined('ABSPATH'))
          exit; 
             // Exit if accessed directly. 
             // Ex: Not being called up directly by index.php or some other theme PHP file
         ?>

      <footer>
    
      </footer>

          <!-- START STEP 2.7 WP_FOOTER CONTENT -->


          <?php wp_footer(); ?>
        <?php // this functions loads the footer content ?>   


    <!-- END STEP 2.7 WP_FOOTER CONTENT -->

    </body>
    </html><?php // END STEP 2.5 BUILD FOOTER ?>