<?php
/**
 * The template part for displaying section contact.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<section id="contact" class="section section-padding contact">
    <!--Page Header-->
    <div class="container">
        <div class="row section-header">
            <h2>
                SAY HELLO TO ME
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p>
        </div>
    </div>
    <!--Page Content-->
    <div class="contact-content">
		<?php if ( cs_get_option( 'so_section_contact_gmap_enable' ) ): ?>
            <div id="gmap" class="" data-map-latitude="<?php echo cs_get_option( 'so_section_contact_gmap_lat' ) ?>"
                 data-map-longitude="<?php echo cs_get_option( 'so_section_contact_gmap_long' ) ?>">
                <!--Google Map will Be Shown Here-->
            </div>
		<?php endif; ?>
        <div class="container">
            <div class="row contact-main-content">
                <!--Contact Form-->
                <div class="col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 contact-form">
					<?php
					
					if ( cs_get_option( 'so_section_contact_shortcode' ) ) {
						echo do_shortcode( cs_get_option( 'so_section_contact_shortcode' ) );
					}
					?>
                    <div id="form-messages"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Detail Item-->
    <div class="contact-detail-item section-padding solid-bg">
        <div class="container">
            <div class="row">
				<?php
				
				foreach ( cs_get_all_option() as $key => $value ) {
					if ( strpos( $key, 'so_profile_address_' ) !== FALSE ) {
						if ( $value == '' ) {
							continue;
						}
						$address_list[ $key ] = $value;
					}
				}
				?>
				
				<?php if ( ! empty( $address_list ) ) : ?>
					<?php $titles = array(
						'map'   => 'ADDRESS',
						'phone' => 'PHONE',
						'mail'  => 'E-MAIL',
						'link'  => 'WEB SITE',
					) ?>
					<?php foreach ( $address_list as $icon => $value )  : ?>
						<?php $icon = str_replace( '_', '-', str_replace( 'so_profile_address_', '', $icon ) ); ?>
                        <!--Single Contact Info-->
                        <div class="col-md-3 col-sm-6 single-contact-detail">
                            <div class="header">
                                <i class="pe-7s-<?php echo $icon ?>"></i>
                                <h4><?php echo $titles[ $icon ] ?></h4>
                            </div>
                            <p><?php echo $value ?></p>
                        </div>
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>

