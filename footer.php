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
      <p> <a href="https://www.google.com/maps/place/Peak/@52.3619237,4.9069833,15z/data=!4m2!3m1!1s0x0:0x766f9e57a4ca8e09?sa=X&ved=2ahUKEwig9faHgOH9AhUHzKQKHV5XCmgQ_BJ6BAh7EAk" target="_blank" rel="noopener">Amsterdam</a> <br> 
        <a class="textlink-red" href="https://www.google.com/maps/place/Peak/@52.5300528,13.3833705,15z/data=!4m6!3m5!1s0x47a8519cda6a93fd:0xfe52622063ac3511!8m2!3d52.5308535!4d13.4109184!16s%2Fg%2F11tww32j_1" target="_blank" rel="noopener">Berlin</a> <br> 
        <a class="textlink-pink" href="https://www.google.com/maps/place/Peak/@59.3343203,18.0613443,16z/data=!4m7!3m6!1s0x465f9d5eefb50861:0x68fc425d43274f18!8m2!3d59.3340577!4d18.0662635!15sCgRQZWFrkgEXdmVudHVyZV9jYXBpdGFsX2NvbXBhbnngAQA!16s%2Fg%2F11tsdg4_z_?coh=164777&entry=tt&shorturl=1" target="_blank" rel="noopener">Stockholm</a> </p>
      <p>
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
