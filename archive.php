<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>
  <header class="page-header peak-headline">
    <?php
    the_archive_title( '<h1 class="page-title">', '</h1>' );
    //the_archive_description( '<div class="archive-description">', '</div>' );
    ?>
  </header><!-- .page-header -->
  <nav class="peak-media-subnav">
    <a class="peak-media-subnav-button wp-block-button__link has-brand-yellow-background-color" href="<?php echo home_url(); ?>/blog">Media</a>
    <a class="peak-media-subnav-button wp-block-button__link has-brand-pink-background-color disabled" href="<?php echo home_url(); ?>/events">Events</a>
  </nav>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
