<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peak2021
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="site-footer-columns">
      <div class="site-footer-column site-footer-menu">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
        ?>
      </div>
      <div class="site-footer-column site-footer-social">
          <header>Follow Us On</header>
          <a href="<?php the_global_var('crunchbase'); ?>" target="_blank">
            <?php get_template_part( 'inc/inline', 'footer-social-icons-crunchbase.svg' ); ?>
          </a>
          <a href="<?php the_global_var('linkedin'); ?>" target="_blank">
            <?php get_template_part( 'inc/inline', 'footer-social-icons-linkedin.svg' ); ?>
          </a>
          <a href="<?php the_global_var('medium'); ?>" target="_blank">
            <?php get_template_part( 'inc/inline', 'footer-social-icons-circles.svg' ); ?>
          </a>
          <a href="<?php the_global_var('youtube'); ?>" target="_blank">
            <?php get_template_part( 'inc/inline', 'footer-social-icons-youtube.svg' ); ?>
          </a>
          <a href="<?php the_global_var('twitter'); ?>" target="_blank">
            <?php get_template_part( 'inc/inline', 'footer-social-icons-twitter.svg' ); ?>
          </a>
	      <BR><font size=3>Venture Capital</font>

      </div>
	    
      <div class="site-footer-column site-footer-site-info">
        <p>Peak</p> 
        <p>Capital C <br>
        Weesperplein 4b <br>
        1018 XA Amsterdam <br>
        Netherlands </p>
        <p style="margin-top: -.666em"><a href="tel:+31 85 001 4343">+31 85 001 4343</a><br>
        <a href="mailto:<?php the_global_var('email'); ?>"><?php the_global_var('email'); ?></a></p>
      </div><!-- .site-info -->
      <div class="site-footer-column site-footer-site-mail">
        <p>Mail</p>
        <p>Eerste Jacob van Campenstraat 46-1 <br>
        1072 BG Amsterdam
      </div>
      
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
