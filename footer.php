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

  <div class="body-footer">
    <div class="header">
    <h1 class="footer-header mb-0">Follow the<span><a href="http://smyle-sd.com/">
      <img src="https://smyle-sd.com/wp-content/uploads/2022/10/smyleLogo.png" class="footer-logo"></a></span></h1>
    </div>
    <div class="all-logos text-center row d-flex">
      <div class="footer-all col">
          <ul class="icon-section">
            <li class="icon-links">
                <a href="https://www.facebook.com/SMYLE-Co-101844815983658/">
              <i class="fab fa-facebook-f"></i></a></li>
            <li class="icon-links">
              <a href="https://www.instagram.com/smyle_co_/">
                <i class="fab fa-instagram"></i></a></li>
          </ul>
          </div>

          <div class="col">
            <img src="https://smyle-sd.com/wp-content/uploads/2022/10/SMYLE-15-1-e1666137420775-1.png" alt="" class="footer-right-logo">    
        </div>
          </div>

          <?php if (has_nav_menu('footer-community-menu')) : ?>
         
      
    <?php endif; ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>