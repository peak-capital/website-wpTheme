<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package peak2021
 * 
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

  register_block_pattern_category(
    'peak2021',
    array( 'label' => esc_html__( 'Peak Capital', 'peak2021' ) )
  );
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
  // Team member content block
  register_block_pattern(
    'peak2021/team-member',
    array(
      'title'         => esc_html__( 'Peak Team member', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
          <!-- wp:group -->
          <div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"card-subtitle"} -->
          <h2 class="card-subtitle">Co-Founder &amp; Managing Partner</h2>
          <!-- /wp:heading -->

          <!-- wp:more -->
          <!--more-->
          <!-- /wp:more -->

          <!-- wp:paragraph -->
          <p><strong>“A pro-privacy, anti-monopoly and open web that inspires trusted connections and collaboration.”</strong></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p>Open Social is a top-tier SaaS company based in Amsterdam and Enschede, The Netherlands. Open Social is specialized in online community and membership management solutions. They have mastered the art of sharing, serving some of the biggest international NGOs as clients, including the UN, Greenpeace and Pachamama Alliance, and having won several international awards.</p>
          <!-- /wp:paragraph -->

          <!-- wp:columns {"className":"teammember-full-content-coins"} -->
          <div class="wp-block-columns teammember-full-content-coins"><!-- wp:column -->
          <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-coin-title"} -->
          <h3 class="card-full-content-coin-title">Select Investments—</h3>
          <!-- /wp:heading -->

          <!-- wp:image {"id":66,"sizeSlug":"full","linkDestination":"none","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-full card-full-content-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="" class="wp-image-66"/></figure>
          <!-- /wp:image -->

          <!-- wp:image {"id":65,"sizeSlug":"large","linkDestination":"none","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="" class="wp-image-65"/></figure>
          <!-- /wp:image --></div>
          <!-- /wp:column -->

          <!-- wp:column -->
          <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-coin-title"} -->
          <h3 class="card-full-content-coin-title">Links—</h3>
          <!-- /wp:heading -->

          <!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"custom","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><a href="https://twitter.com"><img src="' . esc_url( get_template_directory_uri() ) . '/img/icon-twitter.svg" alt="" class="wp-image-63"/></a></figure>
          <!-- /wp:image -->

          <!-- wp:image {"id":61,"sizeSlug":"large","linkDestination":"custom","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><a href="https://linkedin.com"><img src="' . esc_url( get_template_directory_uri() ) . '/img/icon-linkedin.svg" alt="" class="wp-image-61"/></a></figure>
          <!-- /wp:image --></div>
          <!-- /wp:column --></div>
          <!-- /wp:columns --></div></div>
          <!-- /wp:group -->',
    )
  );

  // Founder content block
  register_block_pattern(
    'peak2021/founder',
    array(
      'title'         => esc_html__( 'Peak Founder', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group -->
        <div class="wp-block-group founder-block"><div class="wp-block-group__inner-container">
        
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"founder-coin"} -->
        <figure class="wp-block-image size-full founder-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt=""/></figure>
        <!-- /wp:image -->

        <!-- wp:image {""sizeSlug":"large","linkDestination":"none","className":"founder-photograph"} -->
        <figure class="wp-block-image size-large founder-photograph"><img src="https://via.placeholder.com/728x90.png?text=Placeholder+Image" alt="founder photograph" /></figure>
        <!-- /wp:image -->

        <!-- wp:more -->
        <!--more-->
        <!-- /wp:more -->

        <!-- wp:heading {"className":"card-full-content-title"} -->
        <h2 class="card-full-content-title">Bram ten Hove (CTO) &amp; Taco Potze (CEO)</h2>
        <!-- /wp:heading -->
    
        <!-- wp:heading {"className":"card-subtitle"} -->
        <h2 class="card-subtitle">OpenSocial Founders</h2>
        <!-- /wp:heading -->
    
        <!-- wp:paragraph -->
        <p><strong>“A pro-privacy, anti-monopoly and open web that inspires trusted connections and collaboration.”</strong></p>
        <!-- /wp:paragraph -->
    
        <!-- wp:paragraph -->
        <p>Open Social is a top-tier SaaS company based in Amsterdam and Enschede, The Netherlands. Open Social is specialized in online community and membership management solutions. They have mastered the art of sharing, serving some of the biggest international NGOs as clients, including the UN, Greenpeace and Pachamama Alliance, and having won several international awards.</p>
        <!-- /wp:paragraph -->
    
        <!-- wp:columns {"className":"card-full-content-links"} -->
        <div class="wp-block-columns card-full-content-links"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-link-title"} -->
        <h3 class="card-full-content-link-title">Other Investors—</h3>
        <!-- /wp:heading -->
    
        <!-- wp:paragraph -->
        <p>Point 9 Capital</p>
        <!-- /wp:paragraph -->
    
        <!-- wp:paragraph -->
        <p>Lowercarbon Capital</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->
    
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-link-title"} -->
        <h3 class="card-full-content-link-title">Links—</h3>
        <!-- /wp:heading -->
    
        <!-- wp:paragraph -->
        <p><a href="https://www.getopensocial.com/about-us/#vacancies">Jobs at OpenSocial</a></p>
        <!-- /wp:paragraph -->
    
        <!-- wp:paragraph -->
        <p><a href="https://www.getopensocial.com/">opensocial.com</a></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
        <!-- /wp:group -->',
    )
  );

  //Testimonial Carousel
  register_block_pattern(
    'peak2021/testimonial-carousel',
    array(
      'title'         => esc_html__( 'Peak Testimonial Carousel', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"testimonial-carousel slider"} -->
        <div class="wp-block-group testimonial-carousel slider"><div class="wp-block-group__inner-container">
        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container">
        <!-- wp:heading {"level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="testimonial-carousel-quote">Peak Capital is very hands on and reliable, with a strong network of LP\'s. The partners invest a lot of their time to help us grow and are available when we need them.</h3>
        <!-- /wp:heading -->
  
        <!-- wp:image {"width":80,"height":80,"sizeSlug":"large","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <figure class="wp-block-image size-large is-resized testimonial-carousel-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="" width="80" height="80"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->
  
        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container">
        <!-- wp:heading {"level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="testimonial-carousel-quote">Very involved, analytical and cooperative VC. Great guidance and always a pleasure to work with. Thanks Team Peak.</h3>
        <!-- /wp:heading -->
  
        <!-- wp:image {"width":80,"height":80,"sizeSlug":"full","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <figure class="wp-block-image size-full is-resized testimonial-carousel-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="" width="80" height="80"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->
  
        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container">
        <!-- wp:heading {"level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="testimonial-carousel-quote">From the first contact, the closing and the official collaboration, Peak is a great partner They have the knowledge and resources guide the growth phase, without losing sight of the culture</h3>
        <!-- /wp:heading -->
  
        <!-- wp:image {"width":80,"height":80,"sizeSlug":"large","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <figure class="wp-block-image size-large is-resized testimonial-carousel-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="" width="80" height="80"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->
      ',
    )
  );  

  register_block_pattern(
    'peak2021/peak-headline',
    array(
      'title'         => esc_html__( 'Peak Headline', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:heading {"textAlign":"center","className":"peak-headline"} -->
        <h2 class="has-text-align-center peak-headline">We’re based in Amsterdam but we operate Europe-wide.<br>We approach VC life with a mix of Gut Instinct and Deep Data.<br>/<br>Meet PEAK.</h2>
        <!-- /wp:heading -->',
    )
  );

  register_block_pattern( 
    'peak2021/peak-page-header',
    array(
      'title'         => esc_html__( 'Peak Page Header', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"peak-page-head"} -->
        <div class="wp-block-group peak-page-head"><div class="wp-block-group__inner-container">
        
        <!-- wp:image {"id":37,"sizeSlug":"large","linkDestination":"none","className":"peak-page-header-heroimg"} -->
        <figure class="wp-block-image size-full peak-page-header-heroimg"><img src="https://via.placeholder.com/1024x395.png?text=Oh+No!+Look+at+me,+I+am+hideous!+Please!+Replace+me+with+something+beautiful!" alt=""/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","className":"peak-headline","fontSize":"huge"} -->
        <h2 class="has-text-align-center peak-headline has-huge-font-size">We fiercely back exceptional founders that will change millions of lives for the better.</h2>
        <!-- /wp:heading -->
        
        </div></div>
        <!-- /wp:group -->',
    )
  );

  register_block_pattern( 
    'peak2021/peak-4T',
    array(
      'title'         => esc_html__( 'Peak 4Ts', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"peak-4t-block"} -->
        <div class="wp-block-group peak-4t-block"><div class="wp-block-group__inner-container">
        
        <!-- wp:heading {"textAlign":"center","className":"peak-headline"} -->
        <h2 class="has-text-align-center peak-headline">Are you a team with multiple founders and ready to scale?<br><br>Our 4T’s guide who we partner with:</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"peak-4t-columns"} -->
        <div class="wp-block-columns peak-4t-columns"><!-- wp:column {"className":"peak-4t-t1"} -->
        <div class="wp-block-column peak-4t-t1"><!-- wp:heading -->
        <h2>Team*</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We look for: </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Multiple co-founders,<br>Strong execution, Tech expertise</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We tend to avoid:</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Start-ups without<br>their own tech.</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">* Most important</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"peak-4t-t2"} -->
        <div class="wp-block-column peak-4t-t2"><!-- wp:heading -->
        <h2>Traction</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We look for: </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Strong added value,<br>Large market size, Beating competitors</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We tend to avoid:</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Start-ups that<br>are not yet live.</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"peak-4t-t3"} -->
        <div class="wp-block-column peak-4t-t3"><!-- wp:heading -->
        <h2>Thesis</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We look for: </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Team ready to scale,<br>Proof of concept,<br>Proof of traction</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We tend to avoid:</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Start-ups with<br>small markets.</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"peak-4t-t4"} -->
        <div class="wp-block-column peak-4t-t4"><!-- wp:heading -->
        <h2>Timing</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We look for: </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Team ready to scale,<br>Proof of concept,<br>Proof of traction</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We tend to avoid:</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"medium"} -->
        <p class="has-medium-font-size"><strong>Start-ups with<br>only one founder.</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern( 
    'peak2021/peak-faqs',
    array(
      'title'         => esc_html__( 'Peak FAQs', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"peak-faq-block"} -->
        <div class="wp-block-group peak-faq-block"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","className":"peak-headline"} -->
        <h2 class="has-text-align-center peak-headline">Anything unclear? <br>Check our FAQs below...</h2>
        <!-- /wp:heading -->
      
        <!-- wp:group {"className":"peak-faq"} -->
        <div class="wp-block-group peak-faq"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"peak-faq-question"} -->
        <h2 class="peak-faq-question">Your Team</h2>
        <!-- /wp:heading -->
      
        <!-- wp:group {"className":"peak-faq-answer"} -->
        <div class="wp-block-group peak-faq-answer"><div class="wp-block-group__inner-container"><!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->
      
        <!-- wp:group {"className":"peak-faq"} -->
        <div class="wp-block-group peak-faq"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"peak-faq-question"} -->
        <h2 class="peak-faq-question">Problem and solution</h2>
        <!-- /wp:heading -->
      
        <!-- wp:group {"className":"peak-faq-answer"} -->
        <div class="wp-block-group peak-faq-answer"><div class="wp-block-group__inner-container"><!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->
      
        <!-- wp:group {"className":"peak-faq"} -->
        <div class="wp-block-group peak-faq"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"peak-faq-question"} -->
        <h2 class="peak-faq-question">Product</h2>
        <!-- /wp:heading -->
      
        <!-- wp:group {"className":"peak-faq-answer"} -->
        <div class="wp-block-group peak-faq-answer"><div class="wp-block-group__inner-container"><!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern( 
    'peak2021/peak-residence',
    array(
      'title'         => esc_html__( 'Peak in Residence', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
      <!-- wp:group {"className":"peak-residence-block"} -->
      <div class="wp-block-group peak-residence-block"><div class="wp-block-group__inner-container"><!-- wp:group {"className":"peak-residence-items"} -->
      <div class="wp-block-group peak-residence-items"><div class="wp-block-group__inner-container"><!-- wp:group {"className":"peak-residence-item"} -->
      <div class="wp-block-group peak-residence-item"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"peak-headline"} -->
      <h2 class="peak-headline">Our Entrepreneurs in Residence.<br>Founders with the scars to prove it.</h2>
      <!-- /wp:heading --></div></div>
      <!-- /wp:group -->
  
      <!-- wp:group {"className":"peak-residence-item"} -->
      <div class="wp-block-group peak-residence-item"><div class="wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large","className":"peak-residence-item-image"} -->
      <figure class="wp-block-image size-large peak-residence-item-image"><img src="https://via.placeholder.com/300png?text=I+am+a+resident " alt=""/></figure>
      <!-- /wp:image -->
  
      <!-- wp:heading {"level":3} -->
      <h3>Dennis Goedgebuure</h3>
      <!-- /wp:heading -->
  
      <!-- wp:paragraph -->
      <p>Recently at Paypal, Venmos Fanatics and AirBnB</p>
      <!-- /wp:paragraph --></div></div>
      <!-- /wp:group -->
  
      <!-- wp:group {"className":"peak-residence-item"} -->
      <div class="wp-block-group peak-residence-item"><div class="wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large","className":"peak-residence-item-image"} -->
      <figure class="wp-block-image size-large peak-residence-item-image"><img src="https://via.placeholder.com/300png?text=I+am+a+resident " alt=""/></figure>
      <!-- /wp:image -->
  
      <!-- wp:heading {"level":3} -->
      <h3>Dennis Goedgebuure</h3>
      <!-- /wp:heading -->
  
      <!-- wp:paragraph -->
      <p>Recently at Paypal, Venmos Fanatics and AirBnB</p>
      <!-- /wp:paragraph --></div></div>
      <!-- /wp:group -->
  
      <!-- wp:group {"className":"peak-residence-item"} -->
      <div class="wp-block-group peak-residence-item"><div class="wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large","className":"peak-residence-item-image"} -->
      <figure class="wp-block-image size-large peak-residence-item-image"><img src="https://via.placeholder.com/300png?text=I+am+a+resident " alt=""/></figure>
      <!-- /wp:image -->
  
      <!-- wp:heading {"level":3} -->
      <h3>Dennis Goedgebuure</h3>
      <!-- /wp:heading -->
  
      <!-- wp:paragraph -->
      <p>Recently at Paypal, Venmos Fanatics and AirBnB</p>
      <!-- /wp:paragraph --></div></div>
      <!-- /wp:group -->
  
      <!-- wp:group {"className":"peak-residence-item"} -->
      <div class="wp-block-group peak-residence-item"><div class="wp-block-group__inner-container"><!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"className":"peak-residence-item-button"} -->
      <div class="wp-block-button peak-residence-item-button"><a class="wp-block-button__link" href="mailto:contact@peak.capital">Up for it?<br>Get in touch.</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div></div>
      <!-- /wp:group --></div></div>
      <!-- /wp:group --></div></div>
      <!-- /wp:group -->',
    )
  );
  register_block_pattern( 
    'peak2021/peak-in-the-news',
    array(
      'title'         => esc_html__( 'Peak in the News', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"peak-in-the-news-block"} -->
        <div class="wp-block-group peak-in-the-news-block"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","className":"peak-headline","fontSize":"huge"} -->
        <h2 class="has-text-align-center peak-headline has-huge-font-size">We challenge and equip founders to thrive far beyond their boundaries.</h2>
        <!-- /wp:heading -->
      
        <!-- wp:heading {"textAlign":"center","className":"peak-headline","fontSize":"large"} -->
        <h2 class="has-text-align-center peak-headline has-large-font-size">Our founders are making the news</h2>
        <!-- /wp:heading -->
      
        <!-- wp:group {"className":"peak-in-the-news-items"} -->
        <div class="wp-block-group peak-in-the-news-items"><div class="wp-block-group__inner-container">
        
        <!-- wp:group {"className":"peak-in-the-news-item"} -->
        <div class="wp-block-group peak-in-the-news-item"><div class="wp-block-group__inner-container">
        
        <!-- wp:paragraph {"className":"peak-in-the-news-item-publication"} -->
        <p class="peak-in-the-news-item-publication">Forbes</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"className":"peak-in-the-news-item-title"} -->
        <h2 class="peak-in-the-news-item-title">Utrecht-based Trengo, a shared inbox startup, raises €1.75 million to expand in Europe</h2>
        <!-- /wp:heading -->
      
        <!-- wp:paragraph {"className":"peak-in-the-news-item-link"} -->
        <p class="peak-in-the-news-item-link"><a href="https://peak.capital">Read article</a></p>
        <!-- /wp:paragraph -->
      
        <!-- wp:image {"id":147,"sizeSlug":"large","linkDestination":"none","className":"peak-in-the-news-item-coin"} -->
        <figure class="wp-block-image size-large peak-in-the-news-item-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="founder logo" class="wp-image-147"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->
      
        <!-- wp:group {"className":"peak-in-the-news-item"} -->
        <div class="wp-block-group peak-in-the-news-item"><div class="wp-block-group__inner-container">
        
        <!-- wp:paragraph {"className":"peak-in-the-news-item-publication"} -->
        <p class="peak-in-the-news-item-publication">Forbes</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"className":"peak-in-the-news-item-title"} -->
        <h2 class="peak-in-the-news-item-title">Utrecht-based Trengo, a shared inbox startup, raises €1.75 million to expand in Europe</h2>
        <!-- /wp:heading -->
      
        <!-- wp:paragraph {"className":"peak-in-the-news-item-link"} -->
        <p class="peak-in-the-news-item-link"><a href="https://peak.capital">Read article</a></p>
        <!-- /wp:paragraph -->
      
        <!-- wp:image {"id":147,"sizeSlug":"large","linkDestination":"none","className":"peak-in-the-news-item-coin"} -->
        <figure class="wp-block-image size-large peak-in-the-news-item-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="founder logo" class="wp-image-147"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->
      
        <!-- wp:group {"className":"peak-in-the-news-item"} -->
        <div class="wp-block-group peak-in-the-news-item"><div class="wp-block-group__inner-container">
        
        <!-- wp:paragraph {"className":"peak-in-the-news-item-publication"} -->
        <p class="peak-in-the-news-item-publication">Forbes</p>
        <!-- /wp:paragraph -->  
        
        <!-- wp:heading {"className":"peak-in-the-news-item-title"} -->
        <h2 class="peak-in-the-news-item-title">Utrecht-based Trengo, a shared inbox startup, raises €1.75 million to expand in Europe</h2>
        <!-- /wp:heading -->
      
        <!-- wp:paragraph {"className":"peak-in-the-news-item-link"} -->
        <p class="peak-in-the-news-item-link"><a href="https://peak.capital">Read article</a></p>
        <!-- /wp:paragraph -->
      
        <!-- wp:image {"id":147,"sizeSlug":"large","linkDestination":"none","className":"peak-in-the-news-item-coin"} -->
        <figure class="wp-block-image size-large peak-in-the-news-item-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/img/example-coin.svg" alt="founder logo" class="wp-image-147"/></figure>
        <!-- /wp:image --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern( 
    'peak2021/peak-event',
    array(
      'title'         => esc_html__( 'Peak event', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => 
        '<!-- wp:group {"className":"peak-event"} -->
        <div class="wp-block-group peak-event"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"className":"peak-event-date"} -->
        <p class="peak-event-date">29 April</p>
        <!-- /wp:paragraph -->
      
        <!-- wp:paragraph {"className":"peak-event-name"} -->
        <p class="peak-event-name"><a href="http://startplayz.com">STARTPLATZ Demo Day</a></p>
        <!-- /wp:paragraph -->
      
        <!-- wp:paragraph {"className":"peak-event-country"} -->
        <p class="peak-event-country">Country</p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern( 
    'peak2021/peak-typeform-embed',
    array(
      'title'         => esc_html__( 'Peak typeform', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => 
        '<!-- wp:group {"className":"peak-typeform-container"} -->
        <div id="contact-us" class="wp-block-group peak-typeform-container"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","className":"peak-headline"} -->
        <h2 class="has-text-align-center peak-headline">Contact us</h2>
        <!-- /wp:heading -->
      
        <!-- wp:typeform/embed-plugin {"url":"https://peakcapitalvc.typeform.com/to/wREuKa","formId":"wREuKa"} -->
        <div data-tf-opacity="100" data-tf-medium="embed-wordpress" data-tf-widget="wREuKa" style="height:500px;width:100%" id="widget" class="wp-block-typeform-embed-plugin"></div>
        <!-- /wp:typeform/embed-plugin --></div></div>
        <!-- /wp:group -->',
    )
  );
}
