<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
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
      <?php if( is_page(14)) { ?>
        <div class="slideshow-container">
        
          <img src="http://ss.marin.edu/sites/ss/files/TLC.jpg" class="mySlides fade"/>

          <img src="https://cdn.uwec.edu/athena/images/6426/20150401_cob_tutors_0060-homepage.jpg" class="mySlides fade"/>

          <img src="https://lowercolumbia.edu/tutoring/_assets/images/tutoring_center.jpg" class="mySlides fade"/>

          <div class="tagline">
            <h1>Helping You Invest In Your Future</h1>
          </div>

          <div class="banner-button-div">
            <button  class="banner-button">CONTACT US</button>
          </div>
          
          <div class="overlay"></div>

          <div class="dots-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>

        </div>
      <?php } ?>

      <div class="side-menu">
        <div class="side-menu-close">
          <i class="fas fa-times"></i>
        </div>
        <?php wp_nav_menu($args); ?>
      </div>
      
    </header><!-- /site -->
    <div class="container body-container">