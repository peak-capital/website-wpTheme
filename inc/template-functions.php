<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package peak2021
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function peak2021_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'peak2021_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function peak2021_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'peak2021_pingback_header' );

function peak_get_the_archive_title() {
  if ( is_category() ) {
    $title = __( 'Thoughts > ', 'peak2021' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
  } elseif ( is_tag() ) {
    $title = __( 'Tag Archives: ', 'peak2021' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
  } elseif ( is_author() ) {
    $title = __( 'Author Archives: ', 'peak2021' ) . '<span class="page-description">' . get_the_author_meta( 'display_name' ) . '</span>';
  } elseif ( is_year() ) {
    $title = __( 'Yearly Archives: ', 'peak2021' ) . '<span class="page-description">' . get_the_date( _x( 'Y', 'yearly archives date format', 'peak2021' ) ) . '</span>';
  } elseif ( is_month() ) {
    $title = __( 'Monthly Archives: ', 'peak2021' ) . '<span class="page-description">' . get_the_date( _x( 'F Y', 'monthly archives date format', 'peak2021' ) ) . '</span>';
  } elseif ( is_day() ) {
    $title = __( 'Daily Archives: ', 'peak2021' ) . '<span class="page-description">' . get_the_date() . '</span>';
  } elseif ( is_post_type_archive() ) {
    $title = __( 'Post Type Archives: ', 'peak2021' ) . '<span class="page-description">' . post_type_archive_title( '', false ) . '</span>';
  } elseif ( is_tax() ) {
    $tax = get_taxonomy( get_queried_object()->taxonomy );
    /* translators: %s: Taxonomy singular name. */
    $title = sprintf( esc_html__( '%s Archives:', 'peak2021' ), $tax->labels->singular_name );
  } else {
    $title = __( 'Archives:', 'peak2021' );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'peak_get_the_archive_title' );