<?php
/**
 * The template part for displaying section service.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="services" class="section section-padding services">
	<div class="container">
		<!--Page Header-->
		<div class="row section-header">
			<?php if ( cs_get_option( 'so_section_service_title' ) ): ?>
                <h2><?php echo cs_get_option( 'so_section_service_title' ) ?></h2>
			<?php endif; ?>
			<?php if ( cs_get_option( 'so_section_service_subtitle' ) ): ?>
                <p><?php echo cs_get_option( 'so_section_service_subtitle' ) ?></p>
			<?php endif; ?>
		</div>

		<!--Page Content-->
		<div class="row service-content">
			<?php if ( ! empty( cs_get_option( 'so_section_service_list' ) ) ): ?>
				<?php $services = cs_get_option( 'so_section_service_list' ) ?>
				<?php if ( is_array( $services ) ) : ?>
					<?php foreach ( $services as $key => $value ) : ?>
                        <!--Single Service Item-->
                        <div class="col-md-4 col-sm-6 single-service-container">
                            <div class="single-service">
                                <div class="service-icon">
                                    <i class="<?php echo $value[ 'so_section_service_list_icon' ] ?>"></i>
                                </div>
                                <h4><?php echo $value[ 'so_section_service_list_title' ] ?></h4>
                                <div class="service-detail">
                                    <p><?php echo $value[ 'so_section_service_list_description' ] ?></p>
                                </div>
                            </div>
                        </div>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

