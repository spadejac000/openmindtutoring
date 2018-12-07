<?php

get_header(); ?>

<article class="post page">
  
  <?php
    if(have_posts()) :
      while(have_posts()) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <?php endwhile;

    else:
      echo '<p>No instructors found</p>';
    endif;
  ?>

</article>

<?php
get_footer();

?>