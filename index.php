<?php

get_header(); ?>

<article class="post page">
  
  <?php
    if(have_posts()) :
      while(have_posts()) : the_post(); ?>

        <div class="whole-tutor-post">
          <h2 class="tutor-name"><?php the_title(); ?></h2>
          <div class="tutor-post">
              <div class="tutor-photo">
                  <?php the_post_thumbnail('small-thumbnail') ?>
              </div>
              <div class="tutor-content">
                  <p class="tutor-info"><?php the_content(); ?></p>
              </div>
          </div>
        </div>

      <?php endwhile;

    else:
      echo '<p>No instructors found</p>';
    endif;
  ?>

</article>

<?php
get_footer();

?>