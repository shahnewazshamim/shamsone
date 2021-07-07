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
    <div class="next-prev-page">
        <button type="button" class="prev-page bg-base-color"><i class="fa fa-angle-up text-white"></i></button>
        <button type="button" class="next-page bg-base-color mt-3"><i class="fa fa-angle-down text-white"></i></button>
    </div>
<?php get_footer(); ?>