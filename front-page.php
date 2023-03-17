<?php
/**
 * The Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>

<main id="primary" class="site-main peak-homepage">
  <nav class="home-segment-nav">
    <a class="home-segment-nav-link" href="#home-copy-segment-our-founders">1</a>
    <a class="home-segment-nav-link" href="#home-copy-segment-our-team">2</a>
    <a class="home-segment-nav-link" href="#home-copy-segment-our-focus">3</a>
    <a class="home-segment-nav-link" href="#home-copy-segment-contact">4</a>
    <a class="home-segment-nav-link" href="#home-copy-segment-content">5</a>
    <a class="home-segment-nav-link" href="#home-copy-segment-staytuned">6</a>
  </nav>
		
  <div class="home-copy">
    <div class="home-copy-segment home-image">
      <?php //peak2021_post_thumbnail(); ?>
      <div class="post-thumbnail">
        <!-- <img src="wp-content/themes/peak2021/img/home-hero.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> -->
      </div>
      <div class="home-image-contact-details">
        €150M by entrepreneurs for entrepreneurs<br>
  50+ Investments — Europe <br>
        SaaS — Marketplaces — Platforms 
      </div>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div>      
    </div>

    <div class="home-copy-segment" id="home-copy-segment-our-founders">
      <h1 class="home-copy-segment-title">We dare Europe’s extraordinary founders to realise their visions&nbsp;quicker.</h1>
      <div class="wp-block-buttons is-content-justification-center">
        <div class="wp-block-button is-style-fill">
          <a href="<?php echo get_home_url() ?>/founders" class="wp-block-button__link">Our Founders</a>
        </div>
      </div>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div> 
    </div>

    <div class="home-copy-segment" id="home-copy-segment-our-team">
      <div>
        <h1 class="home-copy-segment-title">We’re the early-stage VC fully backed by&nbsp;entrepreneurs.</h1>
      </div>
      <div class="wp-block-buttons is-content-justification-center">
        <div class="wp-block-button is-style-fill">
          <a href="<?php echo get_home_url() ?>/team" class="wp-block-button__link">Our Team</a>
        </div>
      </div>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div> 
    </div>
      
    <div class="home-copy-segment" id="home-copy-segment-our-focus">
      <h1 class="home-copy-segment-title">
        €250k—€4M*<br> 
        SaaS<br> 
        Marketplace<br> 
        Platforms<br> 
        Europe
      </h1>
      <div class="wp-block-buttons is-content-justification-center">
        <div class="wp-block-button is-style-fill">
          <a href="<?php echo get_home_url() ?>/focus" class="wp-block-button__link">Our Focus</a>
        </div>
      </div>
      <small>*initial ticket size</small>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div> 
    </div>

    <div class="home-copy-segment" id="home-copy-segment-contact">
      <h1 class="home-copy-segment-title">
        Share your vision with&nbsp;us.
      </h1>
      <h1 class="home-copy-segment-title">
        We might be the partners you’ve been looking&nbsp;for.
      </h1>
      <div class="wp-block-buttons is-content-justification-center">
        <div class="wp-block-button is-style-fill">
          <a href="<?php echo get_home_url() ?>/focus#contact-us" class="wp-block-button__link">Contact Us</a>
        </div>
      </div>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div> 
    </div>

    <div class="home-copy-segment" id="home-copy-segment-content">
      <h1 class="home-copy-segment-title">
        As founders ourselves, we’ve taken the&nbsp;hits.
      </h1>
      <h1 class="home-copy-segment-title">
        Let us help you learn from&nbsp;them.
      </h1>
      <div class="wp-block-buttons is-content-justification-center">
        <div class="wp-block-button is-style-fill">
          <a href="<?php echo get_home_url() ?>/blog" class="wp-block-button__link">Thoughts & Resources</a>
        </div>
      </div>
      <div class="home-copy-segment-next">
        <?php get_template_part( 'inc/inline', 'ui-arrow-down.svg' ); ?>
      </div> 
    </div>

    <div class="home-copy-segment" id="home-copy-segment-staytuned">
      <p>Peak</p>
      <p> <a href="https://www.google.com/maps/place/Peak/@52.3619237,4.9069833,15z/data=!4m2!3m1!1s0x0:0x766f9e57a4ca8e09?sa=X&ved=2ahUKEwig9faHgOH9AhUHzKQKHV5XCmgQ_BJ6BAh7EAk" target="_blank" rel="noopener">Amsterdam</a> <br> 
        <a class="textlink-red" href="https://www.google.com/maps/place/Peak/@52.5300528,13.3833705,15z/data=!4m6!3m5!1s0x47a8519cda6a93fd:0xfe52622063ac3511!8m2!3d52.5308535!4d13.4109184!16s%2Fg%2F11tww32j_1" target="_blank" rel="noopener">Berlin</a> <br> 
        <a class="textlink-pink" href="https://www.google.com/maps/place/Peak/@59.3343203,18.0613443,16z/data=!4m7!3m6!1s0x465f9d5eefb50861:0x68fc425d43274f18!8m2!3d59.3340577!4d18.0662635!15sCgRQZWFrkgEXdmVudHVyZV9jYXBpdGFsX2NvbXBhbnngAQA!16s%2Fg%2F11tsdg4_z_?coh=164777&entry=tt&shorturl=1" target="_blank" rel="noopener">Stockholm</a> </p>
      <p>
        <a class="textlink-red" href="tel:+31850014343">+31 85 001 4343</a><br>
        <a class="textlink-pink" href="mailto:<?php the_global_var('email'); ?>"><?php the_global_var('email'); ?></a>
      </p>
      <div class="home-staytuned-contact">
        <p> 
          <a class="textlink-yellow" href="<?php the_global_var('medium'); ?>">Medium</a><br>
          <a class="textlink-blue" href="<?php the_global_var('twitter'); ?>">Twitter</a><br>
          <a class="textlink-green" href="<?php the_global_var('linkedin'); ?>">LinkedIn</a><br>
          <!-- <a class="textlink-green" href="<?php  //the_global_var('fundright'); ?>">Fundright</a><br> -->
          <!-- •<br>
          Privacy Policy -->
        </p>
      </div>
      <div class="home-staytuned-copyright">
        <small>© Peak 2023</small>
      </div>
    </div>
  </div>

</main><!-- #main -->

<?php
// get_sidebar();
 get_footer();
