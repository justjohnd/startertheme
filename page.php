<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

get_header();

?>


<main id="primary" class="site-main">
	<!-- List three most recent posts only using WP_query -->

	<?php
	$recent_posts_query = new WP_Query( 'posts_per_page=2' );

	if ( $recent_posts_query->have_posts() ) :
		while ( $recent_posts_query->have_posts() ) :
			$recent_posts_query->the_post();
			the_title( '<li>', '</li>' );

		endwhile;

endif;
	wp_reset_postdata();


	?>

	<?php get_template_part( 'template-parts/components/button', 'fixed' ); ?>


</main><!-- #main -->

<?php
get_footer();
