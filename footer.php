<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smyle_co_
 */

?>

<footer id="colophon" class="site-footer"> 

  <div class="body-footer container-fluid">
    <h1 class="footer-header">Follow Us</h1>
    <div class="container p-4 pb-0 text-center">
      <!-- Section: Social media -->
      
        
 
        
      
      <!-- Section: Social media -->

      <div class="footer-all row">
      <ul class="icon-section">
      <li class="icon-links"><a href="https://www.facebook.com/SMYLE-Co-101844815983658/"><i class="fab fa-facebook-f"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/p/CQ3lI58hgnW/"><i class="fab fa-instagram"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/p/CQ3lI58hgnW/"><i class="fab fa-twitter"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/p/CQ3lI58hgnW/"><i class="fab fa-apple"></i></a></li>
    </ul>
        <?php if (has_nav_menu('footer-community-menu')) : ?>
          <div class="col-lg-6">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-community-menu',
              'container' => 'ul',
              'menu_class' => 'nav',
            ));
            ?>
          </div>
      </div>
    <?php endif; ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>