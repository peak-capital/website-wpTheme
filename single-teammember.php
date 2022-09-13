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
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
    <div class="teammember-nav">
      <?php 
        $next_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );
        $prev_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );
        echo '<a href="'.$prev_post_url.'" class="cards-nav-prev"></a>';
        echo '<a href="/team" class="backtoteam">Back to team</a>';
        echo '<a href="'.$next_post_url.'" class="cards-nav-next"></a>';
      ?>
    </div>
	</main><!-- #main -->

<?php
//get_sidebar();
// get_footer();
