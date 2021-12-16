<?php

get_header();
if(have_posts()) :

    while(have_posts()): the_post();?>

    <article class="post page">
        <div class="column-container clearfix">

            

            <div class="text-column">
                <p><?php the_content();?></p>
                
            </div>
        </div>
    </article>

   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 
<!-- <a href=""><img src="http://localhost/agency2/wp-content/uploads/2021/12/twitter-icon-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-52" /></a>
             <a href=""><img src="http://localhost/agency2/wp-content/uploads/2021/12/snapchat-icon-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-51" /></a>
            <a href=""><img src="http://localhost/agency2/wp-content/uploads/2021/12/whatsapp-icon-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-53" /></a>
            <a href=""><img src="http://localhost/agency2/wp-content/uploads/2021/12/linkedin-icon-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-50" /></a>
            <a href=""><img src="http://localhost/agency2/wp-content/uploads/2021/12/snapchat-icon-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-51" /></a> -->
