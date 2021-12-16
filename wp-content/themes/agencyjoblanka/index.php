<?php

get_header();
if(have_posts()) :

    while(have_posts()): the_post();?>

<div class="container">


    <div class="row mt-5">
        <div class="com-md-4">  <h2 class=""><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>
        <p><?php the_time('F j, Y g:i a'); ?> |
        <?php the_author();?> </p></div>
        <div class="col-md-8 ml-auto"> <p><?php the_content('100');?></p>
        </div>
    </div>
        
    </div>
   <?php endwhile;

else:
    echo '<p>No contend found</p>';
endif;
get_footer();
?> 
