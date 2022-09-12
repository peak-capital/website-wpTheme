<?php
/**
 * 
 * * Template Name: Events page
 * The template for displaying "Events"
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
  <h1 class="peak-headline ">
    Here we share our latest ideas on entrepreneurship and our events
  </h1>
  <nav class="peak-media-subnav">
    <a class="peak-media-subnav-button wp-block-button__link has-brand-yellow-background-color disabled" href="<?php echo home_url(); ?>/blog">Media</a>
    <a class="peak-media-subnav-button wp-block-button__link has-brand-pink-background-color" href="#">Events</a>
  </nav>
	<main id="primary" class="site-main">

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
