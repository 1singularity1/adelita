<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Superhero
 * @since Superhero 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" >
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'superhero' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
