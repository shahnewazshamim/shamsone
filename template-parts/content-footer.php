<?php
/**
 * The template part for displaying footer content.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="section section-padding solid-bg footer">
    <div class="container">
        <div class="row footer-content text-center">
	        <?php if ( cs_get_option( 'so_header_logo_text_enable' ) ) : ?>
                <h1><?php echo cs_get_option( 'so_header_logo_text' ) ?></h1>
	        <?php else: ?>
                <img src="<?php echo cs_get_option( 'so_header_logo_image' ) ?>" alt=""/>
	        <?php endif; ?>
            <ul class="social-nav">
	            <?php
	            if(cs_get_option('so_enable_social')) {
		            foreach ( cs_get_all_option() as $key => $value ) {
			            if ( strpos( $key, 'so_social_menu_' ) !== false ) {
				            if ( $value == '' ) {
					            continue;
				            }
				            $social_menus[ $key ] = $value;
			            }
		            }
		            if ( ! empty( $social_menus ) ) {
			            foreach ( $social_menus as $icon => $url ) {
				            $icon = str_replace( '_', '-', str_replace( 'so_social_menu_', '', $icon ) );
				            echo '<li><a href="' . $url . '" target="_blank"><i class="fa fa-' . $icon . '" aria-hidden="true"></i></a></li>';
			            }
		            }
	            }
	            ?>
            </ul>
	        <?php if (cs_get_option('so_copyright')): ?>
                <div class="copyright-text">
                    <p class="copy-text"><?php echo cs_get_option('so_copyright') ?></p>
                </div>
	        <?php endif; ?>
        </div>
    </div>
</section>