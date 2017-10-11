<?php
/**
 * The template for displaying the single post for 'so-portfolio'.
 *
 * @package    WordPress
 * @subpackage Shams_One
 * @since      Shams One 1.0.0
 */
?>

<?php get_header(); ?>

<?php global $post; ?>
<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', $post->post_type ); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
