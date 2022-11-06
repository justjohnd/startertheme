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

	<!-- For a static front page, the loop pulls information from the page itself, not blog posts -->
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		wp_reset_postdata();
	?>
	

	<!-- List three most recent posts only using WP_query -->
	<?php
	$recent_posts_query = new WP_Query( 'posts_per_page=2' );

	if ( $recent_posts_query->have_posts() ) :
		while ( $recent_posts_query->have_posts() ) :
			$recent_posts_query->the_post();
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
				<?php printf( esc_html__( the_title() ) . '........' ); ?>
			</a>
			<?php
			$categories_list = get_the_category_list( esc_html__( ', ', 'starter-theme' ) );
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'starter-theme' ) . '</span>', $categories_list );
			?>
			</li>
			<?php
		endwhile;
		endif;
		wp_reset_postdata();
	?>

	<?php get_template_part( 'template-parts/components/button', 'fixed' ); ?>


</main><!-- #main -->

<?php
get_footer();
