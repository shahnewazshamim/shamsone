<?php
/**
 * The template part for displaying section overview.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<?php if ( ! empty( cs_get_option( 'so_section_overview_stat' ) ) ): ?>
    <section id="overview" class="section section-padding overview image-bg"
	    <?php if ( cs_get_option( 'so_section_overview_image' ) ): ?>
            style="background-image:url('<?php echo cs_get_option( 'so_section_overview_image' ) ?>');"
	    <?php else: ?>
            style="background-image:url('<?php echo DIR_SHAMS_ONE_IMG . cs_get_option( 'so_section_overview_default_image' ) ?>');"
	    <?php endif; ?>
        <!--Image Overlay-->
        <div class="overlay"></div>
        <div class="container">
            <div class="row overview-content">
				<?php $statistics = cs_get_option( 'so_section_overview_stat' ) ?>
				<?php if ( is_array( $statistics ) ) : ?>
					<?php foreach ( $statistics as $key => $value ) : ?>
                        <div class="col-md-3 col-sm-6 single-item ">
                            <i class="fa <?php echo $value[ 'so_section_overview_stat_icon' ] ?>"></i>
                            <div class="content">
                                <h2><?php echo $value[ 'so_section_overview_stat_value' ] ?></h2>
                                <p><?php echo $value[ 'so_section_overview_stat_title' ] ?></p>
                            </div>
                        </div>
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>