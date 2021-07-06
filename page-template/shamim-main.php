<?php
/**
 * Template Name: Main Page
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'header' ); ?>
	<main id="main">
		<?php get_template_part( 'template-parts/section', 'hero' ); ?>
		<?php get_template_part( 'template-parts/section', 'about' ); ?>
		<?php foreach (cs_get_options() as $key => $value) {
			if ( strpos( $key, '_icon' ) !== false ) {
				if($value == '') continue;
				$name = str_replace('menu_', '', $key);
				$name = str_replace('_icon', '', $name);
				get_template_part( 'template-parts/section', $name );
			}
		}
		?>
	</main>
<?php get_footer(); ?>