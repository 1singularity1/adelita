<?php
/**
 * Template Name: Jewellery Page
 *
 * The template for displaying full-width pages.
 *
 * @package Superhero
 * @since Superhero 1.0
 */


get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page-dresses' ); ?>
	<?php endwhile; // end of the loop. ?>
	
	<?php $query = new WP_Query('category_name=jewellery'); ?>
 	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php
// 				if (in_category('dresses')) {
					/* Include the Post-Format-specific template for the content.
				 	* If you want to overload this in a child theme then include a file
				 	* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 	*/
					get_template_part( 'content-jewellery', get_post_format() );
// 				}
			?>
			<div id="separator"></div>
			
		<?php endwhile; ?>

		<?php superhero_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

	</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>