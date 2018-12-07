<?php

get_header(); ?>

<article class="post page">

  <h1 class="page-title">Tutors</h1>
  
  <?php
    if(have_posts()) :
      while(have_posts()) : the_post(); ?>

        <div class="tutor-post">
            <div class="tutor-photo">
                <?php the_post_thumbnail('small-thumbnail') ?>
            </div>
            <div class="tutor-content">
                <h2><?php the_title(); ?></h2>
                <p class="tutor-info"><?php the_content(); ?></p>
            </div>
        </div>

        <hr />

      <?php endwhile;

    else:
      echo '<p>No instructors found</p>';
    endif;
  ?>

</article>

<?php
get_footer();

?>