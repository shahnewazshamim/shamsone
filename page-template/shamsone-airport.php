<?php
/**
 * Template Name: Shams One Airport
 *
 * @package    WordPress
 * @subpackage Shams_One
 * @since      Shams One 1.0.0
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'navbar' ); ?>

<?php
foreach ( cs_get_all_option() as $key => $value ) {
	if ( strpos( $key, 'so_section_' ) !== false ) {
		if ( $value == '' ) {
			continue;
		}
		if(cs_get_option($key)) {
			$slug = str_replace('so_section_', '', $key);
			$name = str_replace('_enable', '', $slug);
			get_template_part( 'template-parts/section', $name );
		}
	}
}
?>

<?php get_template_part( 'template-parts/content', 'footer' ); ?>

<?php get_footer(); ?>
