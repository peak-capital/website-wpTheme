<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package peak2021
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div class="darkmode-toggle">
      <label class="darkmode-toggle-switch">
        <input type="checkbox">
        <span class="darkmode-toggle-slider round"></span>
        <br>
        <span class="darkmode-toggle-title">Darkmode</span>
      </label>
    </div>
		<?php
		while ( have_posts() ) :
			the_post();
			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'peak2021' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'peak2021' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
      echo '<div class="single-post-next-link">';
      $next_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );
      echo '<a href="'.$next_post_url.'">';
      get_template_part('inc/inline', 'ui-arrow-right.svg');
      echo '<br>Next Article</a>';
      // echo get_next_post_link('%link', 'Next Article');
      echo '</div>';

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
