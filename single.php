<?php 



get_header();

?>


    <?php

         if(have_posts()){

            while(have_posts())
            {
            the_post();
            get_template_part('partie-site/contenu', 'job-list');
            }
            
          }
    ?>

<?php
get_footer();

?>