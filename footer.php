</div><!-- /container -->
<footer class="site-footer">

  <div class="container footer-container">

    <div class="footer-box1 footer-contact-info">
      <i class="fas fa-phone footer-phone"></i>(555) 555-5555<br /> <i class="fas fa-envelope footer-email"></i>oliversykes@gmail.com
    </div>

    <div class="footer-box2">
      <ul class="footer-social-list">
        <li class="footer-social facebook"><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li class="footer-social twitter"><a href=""><i class="fab fa-twitter"></i></a></li>
        <li class="footer-social linkedin"><a href=""><i class="fab fa-linkedin-in"></i></a></li>
        <li class="footer-social instagram"><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>

    <div class="footer-box3">
      <p>&copy; <?php echo date('Y') ?> - <?php bloginfo('name'); ?></p>
    </div>

    <div class="footer-box4">
      <nav class="footer-site-nav">
        <?php
          $args = array(
            'theme_location' => 'footer'
          )
        ?>

        <?php wp_nav_menu($args); ?>
      </nav>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>