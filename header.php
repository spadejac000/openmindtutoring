<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

    <!-- site-header -->
    <header class="site-header">
      
      <nav class="site-nav primary-nav container-1">
      <div class="container-header">
        <i class="fas fa-bars"></i>
        <div class="box-1">
          <?php
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
        </div>
        
        <?php
          $args = array(
            'theme_location' => 'primary'
          )
        ?>

        <?php
          $subArgs = array(
            'theme_location' => 'subPrimary'
          )
        ?>

        <div class="box-2">
          <div class="drop-down-menu">
            <?php wp_nav_menu($subArgs); ?>
          </div>
          <div class="primary-header-menu">
            <?php wp_nav_menu($args); ?>
          </div>
        </div>
          <div class="phone-number"><i class="fas fa-phone header-phone"></i>(555) 555-5555</div>
        </div>
      </nav>
      <div class="slideshow-container">
        
        <img src="https://www.thoughtco.com/thmb/45XWafEdDpIzg4Ze9943GM7fMi4=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-187244393-5a980ce743a1030037ba389f.jpg" class="mySlides fade"/>

        <img src="https://cdn.uwec.edu/athena/images/6426/20150401_cob_tutors_0060-homepage.jpg" class="mySlides fade"/>

        <img src="http://www.tutordoctor.com/images/blog/Tutor-helping-teen-girl-student.jpg" class="mySlides fade"/>

        <div class="overlay"></div>

        <div class="dots-container">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

      </div>

      <div class="side-menu">
        <div class="side-menu-close">
          <i class="fas fa-times"></i>
        </div>
        <?php wp_nav_menu($args); ?>
      </div>
      
    </header><!-- /site -->
    <div class="container">