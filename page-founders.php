<?php
/**
 * 
 * * Template Name: Founders page
 * The template for displaying "Founders"
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>

	<main id="primary" class="site-main">
  <div class="founders-container">
    <div class="founder-filters">
      <button class="founder-filter founder-filter-saas">SaaS</button>
      <button class="founder-filter founder-filter-pm">Platform &<br>Marketplace</button>
      <button class="founder-filter founder-filter-exits">Exits</button>
    </div>
    <div class="founders cards">
      <?php 
        $args = array(  
          'post_type' => 'founders',
          'post_status' => 'publish',
          'posts_per_page' => -1, 
          //'orderby’ => 'title', 
          //'order’ => 'ASC', 
        );
        global $more;
        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post();
          //Get business model category
          $terms = get_the_terms($loop->ID, 'businessmodel' );
          if (! empty($terms) ) :
              $tnames_arr = array();
              $tslugs_arr = array();
              foreach ($terms as $term) {
                  $tnames_arr[] = $term->name;
                  $tslugs_arr[] = $term->slug;
              }
              $terms_name_str = join( " ", $tnames_arr);
              $terms_slug_str = join( " ", $tslugs_arr);
          else :
            $terms_slug_str = "No Business model selected";
          endif;
        ?>
        <?php  
        if ( get_field('exit') ) {
          echo '<div class="card founder-exit '.$terms_slug_str.'">';
        } else {
          echo '<div class="card '.$terms_slug_str.'">';
        }; 
          echo '<div class="card-preview">';
              the_content('', true); 
              echo '<h3 class="card-preview-title">';
                print the_title(); 
              echo '</h3>
              <div class="card-preview-meta">            
                <span class="card-preview-meta-year">';            
                  the_field('year');
                echo '</span>
              </div>                         
          </div>'; ?>
          <?php $more = 1;
            echo '<div class="card-full">';
              echo get_template_part( 'inc/inline', 'peak_logo.svg' );           
            echo '<div class="card-full-content">
              <div class="card-full-meta">';     
                if ( get_field('year') ) {
                  echo '<span class="card-full-meta-year">'.the_field('year').'</span>, ';
                };                          
                if ( get_field('amount') ) {
                  echo '<span class="card-full-meta-amount">'.the_field('amount').'</span>, ';
                };
                echo '<span class="card-full-meta-category">';
                  echo $terms_name_str; 
                echo '</span>
              </div>';  
              the_content(); ?>
              <button class="cards-nav-close"></button>
              <button class="cards-nav-next"></button>
              <button class="cards-nav-prev"></button>
            </div>
          </div>
        </div>
      <?php 
        endwhile;
        wp_reset_postdata(); 
      ?>  
    </div> 
  </div>

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'page' );		

    endwhile; // End of the loop.
    ?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
